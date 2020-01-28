<?php $__env->startSection('indexPage'); ?>
   
     <?php echo $__env->make('vendor.vendorNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>Vendor Profile <small>Edit and Update your profile.</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-dashboard">
                    <div class="row">
                        <div class="col-md-7 dashboard-form">
                            <div class="bg-white pinside40 mb30">
                                <?php if(session()->has('successMessageProfile')): ?>
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> <?php echo e(session()->get('successMessageProfile')); ?>.
                                                  </div>
                                <?php endif; ?>
                                <?php if(session()->has('errorMessageProfile')): ?>
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> <?php echo e(session()->get('errorMessageProfile')); ?>.
                                                  </div>
                                <?php endif; ?>
                                <?php if(auth::user()->images==''): ?>
                                            <img src="<?php echo e(asset('images/user.png')); ?>" height="150" width="150" class="img-circle" style="margin-bottom:12px;">
                                            <?php else: ?>
                                            <?php $image  = auth::user()->images; ?>
                                            <img width="150" height="150" class="img-circle" src="<?php echo e(asset('storage/' . $image)); ?>" alt="">
                                            <?php endif; ?>
                                
                                
                                <form class="form-horizontal" action="<?php echo e(route('vendor.changeAvatar')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class=" row">
                                        
                                        <div class="col-md-4">
                                            
                                            <input id="image" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-file" type="file" required="required">
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-8 upload-file">
                                            
                                        </div>
                                       
                                        
                                        <div class="col-md-12">
                                            <button id="submit" name="submit" class="btn btn-primary ">Change Profile Picture</button>
                                        </div>
                                  <h2 class="form-title" style="color: white">Vendor Profile </h2>
                                    
                                    </div>
                                    <!-- Text input-->
                                    

                                </form>
                                <!--/////////////////////////end picture //////---->
                                 <?php if(session()->has('successInfoMessage')): ?>
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> <?php echo e(session()->get('successInfoMessage')); ?>.
                                                  </div>
                                <?php endif; ?>
                                <?php if(session()->has('errorInfoMessage')): ?>
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> <?php echo e(session()->get('errorInfoMessage')); ?>.
                                                  </div>
                                <?php endif; ?>
                                <form class="form-horizontal" action="<?php echo e(route('vendor.changeInfo')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Name<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Vendor Name"  class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required=""  value="<?php echo e(auth::user()->name); ?>">
                                        </div>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Website </label>
                                        <div class="col-md-8">
                                            <input id="name" name="website" type="text" placeholder="Vendor Website" class="form-control <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" value="<?php echo e(auth::user()->website); ?>">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Email<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="email" type="email" placeholder="Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required="" readonly="" value="<?php echo e(auth::user()->email); ?>">
                                        </div>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Phone<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="phone" type="text" placeholder="Phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required="" value="<?php echo e(auth::user()->phone); ?>">
                                        </div>
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="description">Description</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="description" name="Description" rows="6" cols="12"><?php echo e(auth::user()->desc); ?></textarea>
                                        </div>
                                    </div>
                                    <h2 class="form-title">Socail Media Profile</h2>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Facebook URl</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Facebook" type="text" placeholder="Facebook URl" class="form-control input-md" value="<?php echo e(auth::user()->facebookURl); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Twitter Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Twitter" type="text" placeholder="Twitter Url" class="form-control input-md" value="<?php echo e(auth::user()->twitterUrl); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Linkedin Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Linkedin" type="text" placeholder="Linkedin Url" class="form-control input-md" value="<?php echo e(auth::user()->linkedinUrl); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Pinterest Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Pinterest" type="text" placeholder="Pinterest Url" class="form-control input-md" value="<?php echo e(auth::user()->pinterestUrl); ?>">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 dashboard-form">
                            <div class="bg-white pinside40 mb30">

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
                                <form class="form-horizontal" action="<?php echo e(route('vendor.changePassword')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <!-- Form Name -->
                                    <h2 class="form-title">Change Password</h2>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="oldpassword">Old Password</label>
                                        <div class="col-md-8">
                                            <input id="oldpassword" name="oldpassword" type="password" placeholder="Old Password" class="form-control <?php $__errorArgs = ['oldpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required="">
                                            <?php $__errorArgs = ['oldpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="newpassword">New Password</label>
                                        <div class="col-md-8">
                                            <input id="newpassword" name="newpassword" type="password" placeholder="New Password" class="form-control <?php $__errorArgs = ['newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required="">
                                        </div>
                                        <?php $__errorArgs = ['newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input id="ConfirmPassword" name="ConfirmPassword" type="password" placeholder="Confirm Password" class="form-control <?php $__errorArgs = ['ConfirmPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-md" required="">
                                            <?php $__errorArgs = ['ConfirmPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/vendor/vendorProfile.blade.php ENDPATH**/ ?>