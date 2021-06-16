@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/setting.css') }}">
@endsection
@section('content')
    <div class="row">
    	<div class="col-lg-3">
    		
    	</div>
    	<div class="col-lg-6" style="padding-left: 10px;padding-right: 30px;">
    		<div class="register-box">
                <h3 class="c-white text-center">You can change your password.</h3>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password" class="c-white">CURRENT PASSWORD</label>
                        <input type="password" class="form-control trans" id="cur_pass" name="cur_pass" placeholder="Enter current password">
                    </div>
                     <div class="form-group">
                        <label for="new_pass" class="c-white">NEW PASSWORD</label>
                        <input type="password" class="form-control trans" id="new_pass" name="new_pass" placeholder="Enter new password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_pass" class="c-white">CONFIRM PASSWORD</label>
                        <input type="password" class="form-control trans" id="confirm_pass" name="confirm_pass" placeholder="Enter confirm password">
                    </div>
                    <button type="submit" class="btn btn-primary black_btn float-right update_btn" style="border: 2px #2babe2 solid;">Update</button>
                </form>
            </div>
    	</div>
    	<div class="col-lg-3" style="margin-top: 50px;">
    		
    	</div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    var save_pwd_url = "{{route('save_pwd')}}";
    var members_url = "{{route('members')}}";
</script>
<script type="text/javascript" src="{{asset('js/setting.js')}}"></script>
@endsection