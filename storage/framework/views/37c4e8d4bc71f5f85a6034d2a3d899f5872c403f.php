<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/members.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    	<div class="col-lg-1"></div>
    	<div class="col-lg-10">
            <div class="members-box">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="c-white">USER ID : <?php echo e(Auth::user()->referral_id); ?></h3>
                        <div class="hi_section c-white">
                            Hi, <?php echo e(Auth::user()->firstname); ?>, welcome to your wallet!
                        </div>
                        <div class="row">
                            <div class="col-sm-3 wallet_section">
                                <h4 class="c-white float-left">Your Investment</h4>
                            </div>
                            <div class="col-sm-1 wallet_section">
                                <h4 class="c-white float-left ">:</h4>
                            </div>
                            <div class="col-sm-8 wallet_section">
                                <h4 class="c-white float-left"><?php echo e($wallet["investment"].".00"); ?> USD</h4>
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
                                <h4 class="c-white float-left"><?php echo e($wallet["profit"].".00"); ?> USD</h4>
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
                                <h4 class="c-white float-left"><?php echo e($wallet["commission"].".00"); ?> USD</h4>
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
                                <a class="black_btn_href" href="<?php echo e(route('topup')); ?>"><div class="black_btn c-white">TOP UP</div></a>   
                            </div>
                            <div class="col-md-4">
                                <a class="black_btn_href" href="<?php echo e(route('withdraw')); ?>"><div class="black_btn c-white"> WITHDRAW</div></a>  
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>