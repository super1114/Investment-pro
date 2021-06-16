<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use App\Models\Wallet;
use App\Models\Notification;
use App\User;
use Auth;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $bitcoin = Bitcoin::all();
        if (count($bitcoin)>0) {
            view()->share('bitcoin_rate', $bitcoin[0]->bitcoin_rate);
        }else {
            view()->share('bitcoin_rate', "48,324.00");
        }
    }
    public function index($page_index)
    {
        $start = ($page_index-1)*10;
        $user_id = Auth::user()->id;
        $users = User::select('users.*','wallets.*','users.id as id')->leftJoin('wallets', 'users.id','=', 'wallets.user_id')->orderBy('users.id','asc')->skip($start)->take(10)->get();
        $total_count = User::select('users.*','wallets.*')->leftJoin('wallets', 'users.id','=', 'wallets.user_id')->count();
        $page_count = floor($total_count/10);
        if ($page_count*10<$total_count) {
            $page_count++;
        }
        return view('admin.index', ["users"=>$users,'total_count'=>$total_count,'page_index'=>$page_index,'page_count'=>$page_count,"page"=>"index"]);
    }
    public function save_wallet(Request $request) {
        $user_id = $request->user_id;
        $inv = $request->inv;
        $com = $request->com;
        $count = Wallet::where("user_id",$user_id)->count();
        $res = array();
        if($count==0) {
            $record = new Wallet;
            $record->user_id = $user_id;
            $record->investment = $inv;
            $record->profit = 0;
            $record->commission = $com;
            $record->date = date("Y-m-d");
            $record->state = 1;
            $record->save();
            $res["status"] = "Success";
            $res["msg"] = "Wallet created successfully!";
        }else {
            Wallet::where('user_id','=',$user_id)->update(["investment"=>$inv,"commission"=>$com]);
            $res["status"] = "Success";
            $res["msg"] = "Wallet updated successfully!";
        }
        return response()->json($res);
    }
    public function admin_bitcoin() {
        $bitcoin = Bitcoin::where('state','=',1)->orderBy('id','desc')->get();
        return view('admin.bitcoin',['bitcoin'=>$bitcoin[0],"page"=>"bitcoin"]);
    }
    public function save_bitcoin(Request $request) {
        $bitcoin = $request->bitcoin;
        $record = new Bitcoin;
        $record->bitcoin_rate = $bitcoin;
        $record->date = date("Y-m-d");
        $record->state = 1;
        $record->save();
        return response()->json(["status"=>"Success","msg"=>"Bitcoin rate successfully updated."]);
    }
    public function notifications() {
        $notifications = Notification::select("users.*","notifications.*","notifications.id as id")->leftJoin("users","notifications.user_id","=","users.id")->get();
        return view('admin.notifications',["page"=>"notify","res"=>$notifications]);
    }
}
