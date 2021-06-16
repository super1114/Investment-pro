<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Wonder World</title>
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/icons/favicon.ico')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/common.css')); ?>">
 <!--    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<?php echo $__env->yieldContent('style'); ?>
</style>
</head>
<body>
    <header>
        <div class="p-5 text-center my-nav">
            <div class="row">
                <div class="col-lg-4"><a href="<?php echo e(route('home')); ?>" class="text-white logo-text">WONDER <span class="c-blue"><i class="fa fa-diamond"></i></span> WORLD</a></div>
                <?php if(Auth::check()): ?>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1 dis_none"><a href="<?php echo e(route('home')); ?>" class="text-white nav-text"><h1>HOME</h1></a></div>
                    <?php if(Auth::user()->role==4): ?>
                    <div class="col-lg-2 dis_none"><a href="<?php echo e(route('admin',['page_index'=>1])); ?>" class="text-white nav-text"><h1>ADMINPANEL</h1></a></div>
                    <?php else: ?>
                    <div class="col-lg-2 dis_none"><a href="<?php echo e(route('members')); ?>" class="text-white nav-text"><h1>WALLET</h1></a></div>
                    <?php endif; ?>
                    <div class="col-lg-1 dis_none"><a href="<?php echo e(route('setting')); ?>" class="text-white nav-text"><h6>SETTING</h6></a></div>
                    <div class="col-lg-1 dis_none"><a href="<?php echo e(route('logout')); ?>" class="text-white nav-text"><h6>LOGOUT</h6></a></div>
                <?php else: ?>
                    <div class="col-lg-2 dis_none"><a href="<?php echo e(route('home')); ?>" class="text-white nav-text"><h1>HOME</h1></a></div>
                    <div class="col-lg-2 dis_none"><a href="<?php echo e(route('register')); ?>" class="text-white nav-text"><h1>REGISTER</h1></a></div>
                    <div class="col-lg-2 dis_none"><a href="<?php echo e(route('login')); ?>" class="text-white nav-text"><h1>LOGIN</h1></a></div>
                <?php endif; ?>
                <div class="col-lg-2 dis_none">
                    <p class="bitcoin-text">Today's Bitcoin Rate</p>
                    <p class="bitcoin-text"><span><img src="<?php echo e(asset('images/bitcoin.png')); ?>"></span>&nbsp;$<?php echo e($bitcoin_rate); ?></p>
                </div>
                <div class="quick_nav" style=""><i class="fa fa-bars"></i></div>
            </div>
        </div>
    </header>
    <div class="content-wrapper">
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>    
        </div>
    </div>
<script src="<?php echo e(asset('js/init.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/vendor/jquery-toast-plugin/dist/jquery-toast-plugin.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
