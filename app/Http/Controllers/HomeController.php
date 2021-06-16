<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
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
        return view('home');
    }
}
