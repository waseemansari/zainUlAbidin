<?php $__env->startSection('indexPage'); ?>
    <?php echo $__env->make('vendor.vendorNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>Vendor Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="couple-board">
                        <div class="row">
                          <div class="col-md-12 my-listing-dashboard">
                            <?php if(session()->has('successMessage')): ?>
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> <?php echo e(session()->get('successMessage')); ?>.
                                                  </div>
                                <?php endif; ?>
                                <?php if(session()->has('errorMessage')): ?>
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> <?php echo e(session()->get('errorMessage')); ?>.
                                                  </div>
                                <?php endif; ?>
                    <div class="table-head">
                        <div class="row">
                            <div class="col-md-1"><span class="th-title">#</span></div>
                            <div class="col-md-1"><span class="th-title">View List</span></div>
                            <div class="col-md-2"><span class="th-title">Name</span></div>
                            <div class="col-md-2"><span class="th-title">Phone</span></div>
                            <div class="col-md-2"><span class="th-title">Email</span></div>
                            <div class="col-md-1"><span class="th-title">wedding</span></div>
                             <div class="col-md-1"><span class="th-title">Guest</span></div>
                             <div class="col-md-1"><span class="th-title">Date</span></div>
                             <div class="col-md-1"><span class="th-title">Send</span></div>
                             
                        </div>
                    </div>
                    <?php $keyCount=1; ?>
                   <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="listing-row">
                        <!-- listing row -->
                        <div class="row">
                            <div class="col-md-1"><?php echo e($keyCount++); ?></div>
                            <div class="col-md-1">
        <a href='<?php echo e(url("vendor/view_list/{$key->id}")); ?>' target="_blank">View List</a>
                            </div>
                            <div class="col-md-2 "><?php echo e($key->name); ?> </div>
                            <div class="col-md-2 "><?php echo e($key->phone); ?></div>
                            <div class="col-md-2 "><?php echo e($key->email); ?></div>
                            <div class="col-md-1 "><?php echo e($key->weddingDate); ?></div>
                            <div class="col-md-1 "><?php echo e($key->guestNumber_id); ?></div>
                            <div class="col-md-1 "><?php echo e($key->created_at->format('d-m-y')); ?></div>
                              <?php if($key->status==0): ?>
                            <div class="col-md-1 listing-action">
                                <a href='<?php echo e(url("vendor/accept_offer/{$key->id}")); ?>' class="btn btn-info btn-xs">Accept</a> 
                                   
                                <a href='<?php echo e(url("vendor/reject_offer/{$key->id}")); ?>' class="btn btn-warning btn-xs" onclick="return confirm('Are you sure that you are reject this list?')">Reject</a>
                            </div>
                            <?php elseif($key->status==1): ?>
                            <div class="col-md-1 listing-action">
                                <p class="text-success">Accepted</p>
                            </div>
                            <?php elseif($key->status==2): ?>
                            <div class="col-md-1 listing-action">
                                <p class="text-success">Rejected</p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- listing row -->
                     <?php echo e($order->links()); ?>

                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/vendor/dashboardVendor.blade.php ENDPATH**/ ?>