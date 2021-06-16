<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/register.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    	<div class="col-lg-3">
    		
    	</div>
    	<div class="col-lg-6">
    		<div class="register-box">
                <h3 class="c-white text-center">Register for a new user.</h3>
                <form action="<?php echo e(route('register')); ?>" method="post" id="reg_form">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="firstname" class="c-white">FIRST NAME</label>
                        <input type="text" class="form-control trans" id="firstname" name="firstname" placeholder="Enter firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="c-white">LAST NAME</label>
                        <input type="text" class="form-control trans" id="lastname" name="lastname" placeholder="Enter lastname">
                    </div>
                    <div class="form-group">
                        <label for="username" class="c-white">USERNAME</label>
                        <input type="text" class="form-control trans" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="email" class="c-white">EMAIL</label>
                        <input type="email" class="form-control trans" id="email" name="email" aria-describedby="emailHelp" style="background-color: rgba(0,0,0,0.2);" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="c-white">PASSWORD</label>
                        <input type="password" class="form-control trans" id="password" name="password" placeholder="Enter password">
                    </div>
                     <div class="form-group">
                        <label for="confirm_password" class="c-white">CONFIRM PASSWORD</label>
                        <input type="password" class="form-control trans" id="confirm_password" name="password_confirmation" placeholder="Enter confirm password">
                    </div>
                    <div class="form-group">
                        <label for="referralid" class="c-white">REFERRALID</label>
                        <input type="text" class="form-control trans" id="referralid" name="referralid" placeholder="Enter referralid">
                    </div>
                    <div class="form-group">
                        <label for="bit_addr" class="c-white">BITCOIN ADDRESS</label>
                        <input type="text" class="form-control trans" id="bit_addr" name="bit_addr" placeholder="Enter bitcoin address">
                    </div>
                    <button type="submit" class="btn btn-primary black_btn float-right register_btn" style="border: 2px #2babe2 solid;">Register</button>
                </form>
            </div>
    	</div>
    	<div class="col-lg-3" style="margin-top: 50px;">
    		
    	</div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        var reg_url = "<?php echo e(route('register')); ?>";
    </script>
    <script type="text/javascript" src="<?php echo e(asset('js/register.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>