
<div class="tp-dashboard-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-header">
                    <div class="profile-pic col-md-2"></div>
                    <div class="profile-info col-md-9 text-center text-danger">
                        <h1 class="profile-title text-danger">Welcome Back <?php echo e(Auth::user()->name); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="tp-dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 dashboard-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="<?php echo e(url('/vendor')); ?>"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                        <li><a href="<?php echo e(route('vendor-profile')); ?>"><i class="fa fa-user db-icon"></i>My Profile</a></li>
                        <li><a href="<?php echo e(route('vendor-listing')); ?>"><i class="fa fa-list db-icon"></i>My Listing </a></li>
                        <li><a href="<?php echo e(route('vendor-add-listing')); ?>"><i class="fa fa-plus-square db-icon"></i>Add listing</a></li>
                        <li><a href="<?php echo e(route('vendor-pricing')); ?>"><i class="fa fa-list-alt db-icon"></i>Pricing Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/vendor/vendorNavbar.blade.php ENDPATH**/ ?>