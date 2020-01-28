<?php $__env->startSection('indexPage'); ?>
  

    <?php echo $__env->make('couple.coupleNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end navbar -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="page-title">
                                    <h1>My Wishlist <small> vendor in wishlist</small><h3 class="btn btn-circle btn-success"><?php echo e(count($wishlist)); ?></h3></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="#" class="btn btn-default">BUtton</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-board">
                        <div class="row"> 
                            <?php if(session()->has('successMessageDelete')): ?>
                                                              <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> <?php echo e(session()->get('successMessageDelete')); ?>.
                                                  </div>
                                <?php endif; ?>
                            <?php if(count($wishlist) > 0): ?>
                            <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="vendor-list-block mb30">
                                    <!-- vendor list block -->
                                    <div class="vendor-img">
                                        <a href='<?php echo e(url("/vendor_details/{$key->ListModel_id}")); ?>'>
                                            <?php if($key->imageList): ?>
                                            <img src="<?php echo e(asset('storage/' . $key->imageList->image)); ?>" alt="wedding venue" class="img-responsive"  style="height: 200px; width: 100%">
                                            <?php else: ?>
                                            <img src="<?php echo e(asset('template/images/vendor-4.jpg')); ?>" alt="wedding venue" class="img-responsive">
                                            <?php endif; ?>
                                            
                                        </a>
                                        <div class="category-badge">
                                            <a href="#" class="category-link">venue</a></div>
                                        <div class="price-lable"><?php echo e($key->price ? $key->price->sign :''); ?> <?php echo e($key->price ? $key->price->title: ''); ?></div>
                                        <div class="favorite-action"> <a href="<?php echo e(route('removeWishList',[$key->id,$key->user_id])); ?>" class="fav-icon"><i class="fa fa-close"></i></a> </div>
                                    </div>
                                    <div class="vendor-detail">
                                        <!-- vendor details -->
                                        <div class="caption">
                                            <h2><a href='<?php echo e(url("/vendor_details/{$key->ListModel_id}")); ?>' class="title"><?php echo e($key->heading); ?></a></h2>
                                            <div class="vendor-meta"> <span class="location"> <i class="fa fa-map-marker map-icon"></i> <?php echo e($key->address); ?> <?php echo e($key->address); ?></span> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.vendor details -->
                                </div>
                                <!-- /.vendor list block -->
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <p class="text-danger">There are not any your wish list</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/coupleWishlist.blade.php ENDPATH**/ ?>