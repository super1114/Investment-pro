<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/topup.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    	<div class="col-lg-1">
    		
    	</div>
    	<div class="col-lg-10">
    		<div class="topup-box">
                <h3 class="c-white">USER ID : <?php echo e(Auth::user()->referral_id); ?></h3>
                <div class="btn-groups-section">
                    <div class="row">
                        <div class="col-md-6" style="">
                            <div class="grey_btn float-right c-white inv_option">500 USD</div>        
                        </div>
                        <div class="col-md-6" style="">
                            <div class="yellow_btn float-left c-white inv_option">1000 USD</div>
                        </div>
                    </div>
                     <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 topup_btn_section">
                            <div class="topup_btn c-white">TOP UP</div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
    	</div>
    	<div class="col-lg-1">
    		
    	</div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    var topup_url = "<?php echo e(route('topup_action')); ?>";
    var members_url = "<?php echo e(route('members')); ?>";
</script>
<script type="text/javascript" src="<?php echo e(asset('js/topup.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>