@extends('layouts.app1')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/topup.css') }}">
@endsection
@section('content')
    <div class="row">
    	<div class="col-lg-1">
    		
    	</div>
    	<div class="col-lg-10" style="padding-left: 10px;padding-right: 30px;">
    		<div class="topup-box">
                <h3 class="c-white text-center">Login to your account.</h3>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="email" class="c-white">EMAIL</label>
                        <input type="email" class="form-control trans" id="email" aria-describedby="emailHelp" style="background-color: rgba(0,0,0,0.2);" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="c-white">PASSWORD</label>
                        <input type="password" class="form-control trans" id="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary black_btn float-right" style="border: 2px #2babe2 solid;">Login</button>
                </form>
            </div>
    	</div>
    	<div class="col-lg-1" style="margin-top: 50px;">
    		
    	</div>
    </div>
@endsection