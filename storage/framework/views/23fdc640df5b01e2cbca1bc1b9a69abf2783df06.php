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
            <div class="budget-board">
                <?php if(session()->has('successMessageDelete')): ?>
                 <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo e(session()->get('successMessageDelete')); ?>.
                </div>
                <?php endif; ?>
                <?php if(session()->has('successMessage')): ?>
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo e(session()->get('successMessage')); ?>.
                </div>
                <?php endif; ?>
                <div class="list-group">
                    <div href="#" class="list-group-item active">
                        <div class="row">
                            <div class="col-md-4"> Budget Category </div>
                            <div class="col-md-2">Estimated Cost</div>
                            <div class="col-md-2">Actual</div>
                            <div class="col-md-1">Paid</div>
                            <div class="col-md-1">Due</div>
                            <div class="col-md-2">Edit / Delete</div>
                        </div>
                    </div>
                    <?php if(count($budget) > 0): ?>
                    <?php $__currentLoopData = $budget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list-group-item">
                        <div class="row">
                        <div class="col-md-4"><a class="#" data-toggle="collapse" href="#Ceremony" aria-expanded="false" aria-controls="Ceremony"> <?php echo e($key->budget); ?> </a> </div>
                            <div class="col-md-2"><?php echo e($key->price ? $key->price->sign : ''); ?>  <?php echo e($key->estimatedCost); ?></div>
                            <div class="col-md-2"><?php echo e($key->price ? $key->price->sign : ''); ?>

                              <?php echo e($key->actualCost); ?></div>
                            <div class="col-md-1"><?php echo e($key->price ? $key->price->sign : ''); ?>

                              <?php echo e($key->paidCost); ?></div>
                            <div class="col-md-1"><?php echo e($key->price ? $key->price->sign : ''); ?>

                              <?php echo e($key->actualCost - $key->paidCost); ?>

                            </div>
                            <div class="col-md-2"><a href="<?php echo e(route('editBudget',$key->id)); ?>" class="btn-edit"><i class="fa fa-edit">Edit</i></a>
                                <a href="<?php echo e(route('deleteBudget',$key->id)); ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete ')"><i class="fa fa-trash">Delete</i></a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    <?php else: ?>
                     <div class="list-group-item">
                        <div class="row">
                            <p class="text-danger text-center">There are no any budget</p>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/coupleBudgett.blade.php ENDPATH**/ ?>