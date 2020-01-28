<?php $__env->startSection('indexPage'); ?>
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        
                        <h1 class="text-capitalize"><?php echo e($categorey->title); ?></h1>
                        <p><?php echo e($categorey->description); ?>.</p>
                        <span class="label label-default"><?php echo e($listCount); ?> <?php echo e($categorey->title); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(route('real-wedding-single')); ?>">Home</a></li>
                        <li class="active"><?php echo e($categorey->title); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <?php if(session()->has('messageWishlist')): ?>
                <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Success!</strong> <?php echo e(session()->get('messageWishlist')); ?>.
                </div>
             <?php endif; ?>
             <?php if(session()->has('messageWishlistError')): ?>
     <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Wrong!</strong> <?php echo e(session()->get('messageWishlistError')); ?>.
     </div>
<?php endif; ?>
                <div class="col-md-3">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form method="get" action="<?php echo e(route('searchVenu')); ?>">
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="photographystyle">Dress Style</label>
                                <select id="photographystyle" name="venu" class="form-control">
                                    <?php if(count($categoreySideBar)>0): ?>
                                            <option value=" ">Select Venu</option>
                                            <?php $__currentLoopData = $categoreySideBar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateKey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                             <option value="<?php echo e(encrypt($cateKey->id)); ?>"><?php echo e($cateKey->title); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php else: ?>
                                             <option value="">Site is maintaince mode</option>
                                            <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="distance">Distance from</label>
                                <select id="distance" name="city" class="form-control">
                                    <?php if(count($city)>0): ?>
                                            <option value=" ">Select City</option>
                                            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityKey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                             <option value="<?php echo e(encrypt($cityKey->id)); ?>"><?php echo e($cityKey->title); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php else: ?>
                                             <option value="">Site is maintaince mode</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <!-- <div class="col-md-12 form-group">
                                <div class="price-range default-range">
                                    <label for="amount" class="control-label">Price range:</label>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <div id="slider-range"></div>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group rating">
                                <label class="control-label">Select Rating </label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                    <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                    <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                    <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                    <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                    <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php if(count($list) > 0 ): ?>
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listKey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                            <a href="<?php echo e(route('vendor-details',[$listKey->id])); ?>">
                            <?php if($listKey->imageList !=''): ?>
                             <img src="<?php echo e(asset('storage/' . $listKey->imageList->image)); ?>" alt="wedding venue" class="img-responsive" height="300">
                            <?php endif; ?>
                             </a>

                                <div class="favourite-bg">
                                    <a href="<?php echo e(route('real-wedding-single')); ?>" class=""></a>
                                    
                                    <a href="<?php echo e(route('wishList',$listKey->id)); ?>" class="">
                                        
                                       <i class="fa fa-heart"></i> 
                                    </a>
                                </div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="<?php echo e(route('vendor-details',[$listKey->id])); ?>" class="title"><?php echo e(Str::limit($listKey->heading,20)); ?></a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> <?php echo e(Str::limit($listKey->address,20)); ?> <?php echo e(Str::limit($listKey->city,20)); ?>.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <?php if($listKey->price !=''): ?>
                                <div class="vendor-price">
                                    <div class="price"><?php echo e($listKey->price->sign); ?> <?php echo e($listKey->price->title); ?></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- venue details -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                         <p>There are not found any thing please try again with different keyword <a href="<?php echo e(url('/')); ?>">Search Again</a></p>
                        <?php endif; ?>
                        
                       </div>
                    <!--side bar -->
                    <div class="row">
                        <div class="col-md-12 tp-pagination">
                                <?php echo e($list->links()); ?>

                        </div>
                    </div>
                    <!-- end side bar -->
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/categoryPage/supplier.blade.php ENDPATH**/ ?>