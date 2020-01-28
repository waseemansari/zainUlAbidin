<?php $__env->startSection('indexPage'); ?>
  <?php echo $__env->make('couple.coupleNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h1>My Dashboard <small>Welcome Couple.</small></h1>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- wedding days block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Wedding days to go</h4>
                        <div class="wd-days-count mb40 mt40">
                            <?php $date = date('Y-m-d'); ?>
                            <?php if($date > auth::user()->wedding): ?>
                               <p class="title-number">Wedding Done</p>
                            <?php else: ?>
                            <h1 class="title-number"><?php echo e($dayCount); ?></h1>
                            <?php endif; ?>
                        </div>
                        <div><?php echo e($wedding); ?></div>
                    </div>
                </div>
                <!-- wedding days block -->
                
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Your Budget</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number">
                                 <?php echo e($totalBudget); ?></h1>
                        </div>
                        <div>Spent  <?php echo e($spendBudget); ?> out of  <?php echo e($totalBudget); ?> so far.</div>
                    </div>
                </div>
                
                <!-- wedding budget block -->
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Checklist - todos</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number"><?php echo e($toDoListRemaining); ?></h1>
                        </div>
                        <div>Completed <?php echo e($toDoListDone); ?> of <?php echo e($toDoListRemaining); ?> checklist items</div>
                    </div>
                </div>
                <!-- wedding budget block -->
                <div class="col-md-4">
                    <!-- wedding wishlist block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Wishlit Item</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number"><?php echo e($wishList); ?></h1>
                        </div>
                        <div>Add more item. Compare &amp; Finalize</div>
                    </div>
                </div>
                <!-- wedding wishlist block -->
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Invited guests</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number"><?php echo e($inviteGuest); ?></h1>
                        </div>
                        <div class="guest-status"><span class="invite-accepted"><?php echo e($inviteGuestAccept); ?> accepted</span> | <span class="invite-descline"><?php echo e($inviteGuestReject); ?> declined</span> | <span class="invite-noresponse"><?php echo e($inviteGuestNotResponse); ?> not responded</span></div>
                    </div>
                </div>
                <!-- wedding budget block -->
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/coupleDashboard.blade.php ENDPATH**/ ?>