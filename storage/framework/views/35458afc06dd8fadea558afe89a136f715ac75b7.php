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
                                    <h1>My Guestlist <small>Your Summary</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="<?php echo e(route('couple.addGuest')); ?>" class="btn btn-default">Add Guest</a> </div>
                            </div>
                        </div>
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
                            <div class="col-md-2"> Guest Name </div>
                            <div class="col-md-2">Phone</div>
                            <div class="col-md-2">Email</div>
                            <div class="col-md-2">Address</div>
                            <div class="col-md-1">Invite</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Edit / Delete</div>
                        </div>
                    </div>
                    <?php if(count($guest) > 0): ?>
                    <?php $__currentLoopData = $guest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list-group-item">
                        <div class="row">
                        <div class="col-md-2"><a class="#" data-toggle="collapse"  aria-expanded="false" aria-controls="Ceremony"> <?php echo e($key->name); ?> </a> </div>
                            <div class="col-md-2"><?php echo e($key->phone); ?></div>
                            <div class="col-md-2"><?php echo e($key->email); ?></div>
                            <div class="col-md-2"><?php echo e($key->address); ?></div>
                            <div class="col-md-1">
                                <?php if($key->invite==0): ?>
                                <a href="<?php echo e(route('inviteGuest',$key->id)); ?>" class=" btn-delete">Invite</a>
                                <?php elseif($key->invite==1): ?>
                            <p  class="text-info">not responded</p>
                             <?php elseif($key->invite==2): ?>
                            <p  class="text-success">accepted</p>
                             <?php elseif($key->invite==3): ?>
                            <p  class="text-danger"> declined</p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2"><a href="<?php echo e(route('editGuest',$key->id)); ?>" class="btn-edit"><i class="fa fa-edit">Edit</i></a>
                                <a href="<?php echo e(route('deleteGuest',$key->id)); ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete ')"><i class="fa fa-trash">Delete</i></a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    <?php else: ?>
                     <div class="list-group-item">
                        <div class="row">
                            <p class="text-danger text-center">There are no any guest</p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-12 tp-pagination">
                            <ul class="pagination">
                               <?php echo e($guest->links()); ?>

                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/coupleGuestlist.blade.php ENDPATH**/ ?>