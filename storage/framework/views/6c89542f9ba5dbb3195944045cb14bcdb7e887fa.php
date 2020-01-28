<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Wedding Vendor.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        <li><a href="<?php echo e(route('help')); ?>"> Help </a></li>
                        <li><a href="<?php echo e(route('price')); ?>">Pricing</a></li>
                        <?php if(auth()->guard()->guest()): ?>
                        
                        <li><a href="<?php echo e(route('register')); ?>" class=" ">I m couple / Register</a></li>
                        <li><a href="<?php echo e(route('signup-vendor')); ?>">Are you vendor?</a></li>
                        <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
                        <li>
                            <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                        </li>
                        <?php else: ?>
                        <?php if(auth::user()->type=='1'): ?>
                        <li>
                            <a href="<?php echo e(url('profile')); ?>">My Profile</a>
                        </li>
                        <?php endif; ?>
                        <?php if(auth::user()->type=='2'): ?>
                        <li>
                            <a href="<?php echo e(url('vendor/vendor_profile')); ?>">your Profile</a>
                        </li>
                        <?php endif; ?>

                        <li>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                         </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="/"><img src="<?php echo e(asset('template/images/logo.png')); ?>" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a>
                                <!-- <ul>
                                    <li><a href="index.html" title="Home" class="animsition-link">Home</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Home v.2</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#">Listing</a>
                                <ul>
                                    <li><a href="vendor-listing-row-map.html" title="Home" class="animsition-link">List / Half Map</a></li>
                                    <li><a href="vendor-listing-sidebar.html" title="Home" class="animsition-link">List / Sidebar Left</a></li>
                                    <li><a href="vendor-listing-no-sidebar.html" title="Home" class="animsition-link">List / No Sidebar</a></li>
                                    <li><a href="vendor-listing-top-map.html" title="Home" class="animsition-link">Top Map / List</a></li>
                                    <li><a href="vendor-list-4-colmun.html" title="Home" class="animsition-link">4 Column List</a></li>
                                    <li><a href="vendor-list-3-colmun.html" title="Home" class="animsition-link">3 Column List</a></li>
                                    <li><a href="vendor-list-horizontal.html" title="Home" class="animsition-link">Horizontal List </a></li>
                                    <li><a href="vendor-list-new.html" title="Home" class="animsition-link">List Variations </a></li>
                                    <li><a href="vendor-listing-bubba.html">Bubba Style Listing</a></li>
                                    <li><a href="vendor-listing-ocean.html">Ocean Style Listing</a></li>
                                </ul>
                            </li>
                            <li><a href="vendor-details.html">Vendor</a>
                                <ul>
                                    <li><a href="vendor-details.html">Vendor Simple</a></li>
                                    <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
                                    <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Home" class="animsition-link">Suppliers</a>
                                
                                <ul>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryKey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('categoryList',[encrypt($categoryKey->id)])); ?>"><?php echo e($categoryKey->title); ?></a>
                                    </li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                               
                            </li>
                            <li><a href="#">Planning Tools</a>
                                <ul>
                                    <li><a href="<?php echo e(route('planning-to-do')); ?>">To Do List</a></li>
                                    <li><a href="<?php echo e(route('planning-budget')); ?>">Budget Planner</a></li>
                                    <li><a href="<?php echo e(route('register')); ?>">Couple Signup (LP)</a></li>
                                    <li><a href="<?php echo e(route('couple-dashboard')); ?>">Couple Admin</a></li>
                                    <li><a href="<?php echo e(route('dashboard-vendor')); ?>">Vendor Admin</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="<?php echo e(route('real-wedding-listing')); ?>">Real Weddings</a>
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/pageTemplate/_header.blade.php ENDPATH**/ ?>