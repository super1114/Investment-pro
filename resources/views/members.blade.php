@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/members.css') }}">
@endsection
@section('content')
    <div class="row">
    	<div class="col-lg-1"></div>
    	<div class="col-lg-10">
            <div class="members-box">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="c-white">USER ID : {{Auth::user()->referral_id}}</h3>
                        <div class="hi_section c-white">
                            Hi, {{Auth::user()->firstname}}, welcome to your wallet!
                        </div>
                        <div class="row">
                            <div class="col-sm-3 wallet_section">
                                <h4 class="c-white float-left">Your Investment</h4>
                            </div>
                            <div class="col-sm-1 wallet_section">
                                <h4 class="c-white float-left ">:</h4>
                            </div>
                            <div class="col-sm-8 wallet_section">
                                <h4 class="c-white float-left">{{$wallet["investment"].".00"}} USD</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 wallet_section">
                                <h4 class="c-white float-left">Your Profit</h4>
                            </div>
                            <div class="col-sm-1 wallet_section">
                                <h4 class="c-white float-left">:</h4>
                            </div>
                            <div class="col-sm-8 wallet_section">
                                <h4 class="c-white float-left">{{$wallet["profit"].".00"}} USD</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 wallet_section">
                                <h4 class="c-white float-left">Your Commission</h4>
                            </div>
                            <div class="col-sm-1 wallet_section">
                                <h4 class="c-white float-left">:</h4>
                            </div>
                            <div class="col-sm-8 wallet_section">
                                <h4 class="c-white float-left">{{$wallet["commission"].".00"}} USD</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blue-bar">
                                </div>    
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px; margin-bottom: 50px;">
                            <div class="col-md-4">
                                <a class="black_btn_href" href="{{route('topup')}}"><div class="black_btn c-white">TOP UP</div></a>   
                            </div>
                            <div class="col-md-4">
                                <a class="black_btn_href" href="{{route('withdraw')}}"><div class="black_btn c-white"> WITHDRAW</div></a>  
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                </div>
                
            </div>   
        </div>
    	<div class="col-lg-1"></div>
    </div>
@endsection