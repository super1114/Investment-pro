<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use App\Models\Wallet;
use App\Models\Notification;
use Auth;
class WithdrawController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $bitcoin = Bitcoin::where('state','=',1)->orderBy('id','desc')->get();
        if (count($bitcoin)>0) {
            view()->share('bitcoin_rate', $bitcoin[0]->bitcoin_rate);
        }else {
            view()->share('bitcoin_rate', "48,324.00");
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $wallet = Wallet::where('user_id','=',$user_id)->get();
        $wallet_res = array();
        $can_withdraw = false;
        if (count($wallet)==0) {
            $wallet_res["investment"] = 0;
            $wallet_res["profit"] = 0;
            $wallet_res["commission"] = 0;
        } else {
            $wallet_res["investment"] = $wallet[0]->investment;
            $wallet_res["profit"] = $wallet[0]->profit;
            $wallet_res["commission"] = $wallet[0]->commission;
            $now = time();
            $your_date = strtotime($wallet[0]->date);
            $datediff = $now - $your_date;
            $datediff = floor($datediff / (60 * 60 * 24));
            if ($datediff>30) {
                $can_withdraw = true;
            }
        }

        return view('withdraw',["wallet"=>$wallet_res,"withdraw"=>$can_withdraw]);
    }
    /*todo send email*/
    public function inv_withdraw(Request $request) {
        $your_date = strtotime($wallet[0]->date);
        
    }
    public function profit_withdraw(Request $request) {
        $amount = $request->amount;
        $user_id = Auth::user()->id;
        $record = new Notification;
        $record->user_id = $user_id;
        $record->content = "withdraw profit";
        $record->amount = $amount;
        $record->status = "unread";
        $record->date = date("Y-m-d");
        $record->save();
        return response()->json(["status"=>"Success","msg"=>"You sent profit withdraw message to admin successfully"]);
    }
    public function com_withdraw(Request $request) {
        $amount = $request->amount;
        $user_id = Auth::user()->id;
        $record = new Notification;
        $record->user_id = $user_id;
        $record->content = "withdraw commission";
        $record->amount = $amount;
        $record->status = "unread";
        $record->date = date("Y-m-d");
        $record->save();
        return response()->json(["status"=>"Success","msg"=>"You sent commission withdraw message to admin successfully"]);
    }
}
