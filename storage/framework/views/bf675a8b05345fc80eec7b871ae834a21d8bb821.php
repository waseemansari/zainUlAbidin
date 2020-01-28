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
                                    <h1>My Budget <small>Create your wedding to do and start planning.</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="<?php echo e(route('add-budget')); ?>" class="btn btn-default" id="show">Add Budget</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white pinside40 todo-form mb30">
                        <h2 class="form-title">Create New Category</h2>
                        <div class="close-sign"><a href="#" id="hide"><i class="fa fa-close"></i></a></div>
                        <form class="row">
                            <div class="col-md-6">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="categoryname">Category Name</label>
                                    <input id="categoryname" name="categoryname" type="text" placeholder="Category Name" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <div class="text-right">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add Category</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->
                        </form>
                    </div>
                </div>
            </div>
            <div class="budget-board bg-white row" >
                <?php if(session()->has('successMessage')): ?>
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo e(session()->get('successMessage')); ?>.
                </div>
                <?php endif; ?>
                <div class="col-md-1"></div>
                <div class="list-group col-md-10" style="padding: 10px;">
                    <form action="<?php echo e(route('postBudget')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="budget" class=" col-form-label text-md-right"><?php echo e(__('Budget Category')); ?></label>
                                <input id="budget" type="budget" class="form-control <?php $__errorArgs = ['budget'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="budget" value="<?php echo e(old('budget')); ?>" required autocomplete="budget" autofocus>

                                <?php $__errorArgs = ['budget'];
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
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="estimatedCost" class=" col-form-label text-md-right"><?php echo e(__('Estimated Cost')); ?></label>
                                <input id="estimatedCost" type="number" class="form-control <?php $__errorArgs = ['estimatedCost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="estimatedCost" value="<?php echo e(old('estimatedCost')); ?>" required autocomplete="estimatedCost" autofocus>

                                <?php $__errorArgs = ['estimatedCost'];
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
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="actualCost" class=" col-form-label text-md-right"><?php echo e(__('Actual Cost')); ?></label>
                                <input id="actualCost" type="number" class="form-control <?php $__errorArgs = ['actualCost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="actualCost" value="<?php echo e(old('actualCost')); ?>" required autocomplete="actualCost" autofocus>

                                <?php $__errorArgs = ['actualCost'];
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
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="paidCost" class=" col-form-label text-md-right"><?php echo e(__('Paid Cost')); ?></label>
                                <input id="paidCost" type="number" class="form-control <?php $__errorArgs = ['paidCost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="paidCost" value="<?php echo e(old('paidCost')); ?>" required autocomplete="paidCost" autofocus>

                                <?php $__errorArgs = ['paidCost'];
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
                         </div>
                         
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="description" class=" col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
                            <textarea  name="description" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="5"><?php echo e(old('description')); ?></textarea>
                                <?php $__errorArgs = ['description'];
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
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="currency" class=" col-form-label text-md-right"><?php echo e(__('Your Currency ')); ?></label>
                            <select name="currency">
                                <option value="">Select Currency</option>
                                <?php $__currentLoopData = $sign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $signKey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($signKey->id); ?>"><?php echo e($signKey->sign); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select><br>
                                <?php $__errorArgs = ['currency'];
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
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                         </div>
                    
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/addBudget.blade.php ENDPATH**/ ?>