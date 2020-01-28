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
                                <h1>My Checklist <small>Create your wedding to do and start planning.</small></h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="action-block"> <a href="<?php echo e(route('couple.addToDoList')); ?>" class="btn btn-default" id="show">Add To Do</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if(session()->has('ToDoListDelete')): ?>
                 <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo e(session()->get('ToDoListDelete')); ?>.
                </div>
                <?php endif; ?>
                <div class="couple-board">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="st-accordion">
                                <!-- shortcode -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title"> <a class="title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Checklist</a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="todo-list-group">
                                                <!-- List group -->
                                                <ul class="listnone">
                                                    <?php $count = 1; $currentDate = date('Y-m-d') ?>
                                                <?php if(count($toDoList) > 0): ?>

                                                <?php $__currentLoopData = $toDoList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="todo-list-item">
                                                        <div class="todo-list">
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                <?php echo e($count++); ?>

                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="todo-task">
                                                                        <h3 class="todo-title"><?php echo e($key->name); ?></h3>
             <small <?php if($key->date<=$currentDate): ?> style="color: red" <?php endif; ?>>
                <?php echo e(Carbon\Carbon::createFromFormat('Y-m-d', $key->date)->format('d M Y')); ?>

            </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                         <div class="todo-action">
                                                            <?php if($key->status==0): ?>
                                               <a href="<?php echo e(route('couple.completeToDoList',$key->id)); ?>" class="btn-circle" title="complete list">
                                         <i class="fa fa-check "></i></a>
                                         <?php else: ?>
                                          <a href="#" class="bg-success btn-circle" title="complete list">
                                         <i class="fa fa-check text-success"></i></a>
                                         <?php endif; ?>
                                             <a href="<?php echo e(route('couple.editToDoList',$key->id)); ?>" class="btn-circle" title="Edit list">
                                         <i class="fa fa-edit"></i></a> 
                                         <a href="<?php echo e(route('couple.toDoListDelete',$key->id)); ?>" class="btn-circle" title="Delete List" onclick="return confirm('Are you sure you are delete check  list')"><i class="fa fa-trash-o"></i></a>
                                          </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-white pinside30 widget-todo">
                                        <h3>Summary of To Dos</h3>
                                        <div class="todo-percentage" data-percent="65"> </div>
                                        <div class="todo-value"> <span class="todo-done"><?php echo e($toDoListDone); ?> Done </span> <span class="todo-pending"><?php echo e($toDoListRemaining); ?> To-Dos </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/couple/toDoList/coupleChecklist.blade.php ENDPATH**/ ?>