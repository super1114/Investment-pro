@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <div class="row">
    	<div class="col-lg-3">
    		
    	</div>
    	<div class="col-lg-6">
    		<div class="login-box">
                <h3 class="c-white text-center">Login to your account.</h3>
                <form action="{{route('login')}}" method="post" id="login_form">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="c-white">EMAIL</label>
                        <input type="email" class="form-control trans" name="email" id="email" aria-describedby="emailHelp" style="background-color: rgba(0,0,0,0.2);" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="c-white">PASSWORD</label>
                        <input type="password" class="form-control trans" name="password" id="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary black_btn float-right login_btn" style="border: 2px #2babe2 solid;">Login</button>
                </form>
            </div>
    	</div>
    	<div class="col-lg-3" style="margin-top: 50px;">
    		
    	</div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var login_url = "{{route('login')}}";
    </script>
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
@endsection