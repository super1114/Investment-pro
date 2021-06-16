<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/withdraw.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    	<div class="col-lg-1"></div>
    	<div class="col-lg-10">
            <div class="withdraw-box">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="c-white">USER ID : <?php echo e(Auth::user()->referral_id); ?></h3>
                        <div class="hi_section c-white">
                            Hi, <?php echo e(Auth::user()->firstname); ?>, welcome to your wallet!
                        </div>
                        <div class="row">
                            <div class="col-sm-5 wallet_section">
                                <h4 class="c-white float-left">Your Investment&nbsp; :&nbsp; <?php echo e($wallet["investment"].".00"); ?> USD</h4>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <input type="text" class="form-control trans" name="investment_amount" id="investment_amount"style="background-color: rgba(0,0,0,0.6); color: white;" placeholder="Investment (USD)">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="blue_btn investment_withdraw">
                                    Withdraw
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="withdraw_text">You can withdraw your investment after 30 days of TOP UP.</h6>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-5 wallet_section">
                                <h4 class="c-white float-left">Your Investment&nbsp; :&nbsp; <?php echo e($wallet["profit"].".00"); ?> USD</h4>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <input type="text" class="form-control trans" name="profit_amount" id="profit_amount"style="background-color: rgba(0,0,0,0.6); color: white;" placeholder="Profit (USD)">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="blue_btn profit_withdraw">
                                    Withdraw
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="withdraw_text">You can withdraw your profit anytime.</h6>
                            </div>
                        </div>
                        <div class="row"  style="margin-top: 20px;">
                            <div class="col-sm-5 wallet_section">
                                <h4 class="c-white float-left">Your Commission&nbsp; :&nbsp; <?php echo e($wallet["commission"].".00"); ?> USD</h4>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <input type="text" class="form-control trans" name="commission_amount" id="commission_amount"style="background-color: rgba(0,0,0,0.6); color: white;" placeholder="Commission (USD)">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="blue_btn commission_withdraw">
                                    Withdraw
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 50px;">
                            <div class="col-sm-12">
                                <h6 class="withdraw_text">You can withdraw your commission anytime.</h6>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
            </div>   
        </div>
    	<div class="col-lg-1"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    var topup_url = "<?php echo e(route('topup_action')); ?>";
    var members_url = "<?php echo e(route('members')); ?>";
    var can_withdraw = "<?php echo e($withdraw); ?>";
    var investment = "<?php echo e($wallet['investment']); ?>";
    var profit = "<?php echo e($wallet['profit']); ?>";
    var commission = "<?php echo e($wallet['commission']); ?>";
    var investment_withdraw_url = "<?php echo e(route('inv_withdraw')); ?>";
    var profit_withdraw_url = "<?php echo e(route('profit_withdraw')); ?>";
    var commission_withdraw_url = "<?php echo e(route('com_withdraw')); ?>";
</script>
<script type="text/javascript" src="<?php echo e(asset('js/withdraw.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>