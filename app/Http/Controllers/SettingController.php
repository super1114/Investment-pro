<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use App\Models\Wallet;
use App\User;
use Auth;
use Hash;
class SettingController extends Controller
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
        return view('setting');
    }
    public function save_pwd(Request $request) {
        $cur_pass = $request->cur_pass;
        $new_pass = $request->new_pass;
        if (Hash::check($cur_pass, Auth::user()->password)) {
            $user_id = Auth::user()->id;
            $record = User::find($user_id);
            $record->password = Hash::make($new_pass);
            $record->save();
            return response()->json(["status"=>"Success","msg"=>"Password was updated successfully"]);    
        }
        return response()->json(["status"=>"error","msg"=>"Current password is not correct"]); 
    }
}
