<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
use App\Models\Wallet;
use App\Mail\WonderWorldMail;
use Auth;
use Session;
use Mail;
class TopUpController extends Controller
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
        return view('topup');
    }
    public function topup_action(Request $request) {
        $investment = $request->investment;
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $user = Auth::user();
        $record = Wallet::where("user_id",$user_id)->get();
        if (empty($record[0])) {
            $new_inv = new Wallet;
            $new_inv->user_id = $user_id;
            $new_inv->investment = $investment;
            $new_inv->profit=0;
            $new_inv->commission=0;
            $new_inv->state = 1;
            $new_inv->date = date("Y-m-d");
            //Mail::to($user_email)->send(new WonderWorldMail($new_inv));
            Mail::send('emails', ['investment' => $new_inv], function ($m) use ($user) {
                $m->from('italexx.ua@gmail.com', 'Wonder World!');
    
                $m->to($user->email, $user->username)->subject('Confirm Payment Process and Invoice!');
            });
            $new_inv->save();
            return response()->json(["status"=>"Success","msg"=>"Created investment ".$investment."$ successfully.\n You will get 1% of profit everyday."]);
        } else {
            return response()->json(["status"=>"Error","msg"=>"You already created investment ".$record[0]->investment.".00$ at ".$record[0]->date]);
        }
    }
}
