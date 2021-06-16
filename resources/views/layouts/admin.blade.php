<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonder World</title>
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@yield('style')
</style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{route('home')}}">Wonder World</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="{{$page=='index'?'active':''}}"><a href="{{route('admin',['page_index'=>1])}}"><i class="fa fa-users"></i>&nbsp;Users</a></li>
                <li class="{{$page=='bitcoin'?'active':''}}"><a href="{{route('admin_bitcoin')}}"><i class="fab fa-bitcoin"></i>&nbsp;Bitcoin rate</a></li>
                <li class="{{$page=='notify'?'active':''}}"><a href="{{route('admin_notifications')}}"><i class="fas fa-bell"></i>&nbsp;Notifications</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    
<script type="text/javascript" src="{{asset('assets/vendor/jquery-toast-plugin/dist/jquery-toast-plugin.js')}}"></script>
@yield('script')
</body>
</html>
