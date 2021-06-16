<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use App\Models\Wallet;
use Auth;
class MembersController extends Controller
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
    public function setProfit() {
        $user_id = Auth::user()->id;
        $my_wallet = Wallet::where("user_id","=",$user_id)->get();
        if(empty($my_wallet[0])) return;
        $now = time(); // or your date as well
        $your_date = strtotime($my_wallet[0]->date);
        $datediff = $now - $your_date;
        $datediff = floor($datediff / (60 * 60 * 24));
        $profit = $my_wallet[0]->investment*$datediff/100;
        Wallet::where("user_id","=",$user_id)->update(["profit"=>$profit]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setProfit();
        $user_id = Auth::user()->id;
        $wallet = Wallet::where('user_id','=',$user_id)->get();
        $wallet_res = array();
        if (count($wallet)==0) {
            $wallet_res["investment"] = 0;
            $wallet_res["profit"] = 0;
            $wallet_res["commission"] = 0;
        } else {
            $wallet_res["investment"] = $wallet[0]->investment;
            $wallet_res["profit"] = $wallet[0]->profit;
            $wallet_res["commission"] = $wallet[0]->commission;
        }
        return view('members',["wallet"=>$wallet_res]);
    }
}
