<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    	<div class="col-lg-3">
    		<div class="left-side-text">
    			<h1 class="c-white">WE KNOW</h1>
    		</div>
    		<div class="left-side-text">
    			<h1 class="c-white">WHATS BEST</h1>
    		</div>
    		<div class="left-side-text">
    			<h1 class="c-white">FOR YOUR</h1>
    		</div>
    		<div class="left-side-text">
    			<h1 class="c-blue">INVESTMENT</h1>
    		</div>
    		<div class="left-side-bar">
    		</div>
    		<div class="left-side-btn">
    			<button class="black_btn c-white get_started_btn">GET STARTED</button>
    		</div>
    	</div>
    	<div class="col-lg-6">
    		<div class="youtube-box">
    			<video width="400" controls style="width: 100%;height: 100%;">
                    <source src="<?php echo e(asset('video/mov_bbb.mp4')); ?>" type="video/mp4">
                    <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                </video>
    		</div>
    	</div>
    	<div class="col-lg-3" style="margin-top: 50px;">
    		<div class="right-side-text1">
    			<h2 class="c-white">JOIN US!<span class="c-blue">&nbsp;30% Profit every month!</span></h2>
    		</div>
    		<div class="right-side-text1">
    			<h2 class="c-white">The Best Financial Plan</h2>
    		</div>
    		<div class="right-side-text1" style="margin-top: 20px; padding-right: 80px;">
    			<h5 class="c-white">
    				Wonderworld is an investment and trading company, from the United Kingdom, which is also an unquestionable leader in the global online investment and asset management markets. We offer most of our services online. This is a significant advantage which helps roll out our full potential and use all the available opportunities. Wonderworld is a company in which thousands of people all across the globe trust their funds.
    			</h5>
    		</div>
    		<div class="right-side-text1" style="margin-top: 20px; padding-right: 80px;">
    			<h4 class="c-white">
    				With more than 30% profits every months!
    			</h4>
    		</div>
    	</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>