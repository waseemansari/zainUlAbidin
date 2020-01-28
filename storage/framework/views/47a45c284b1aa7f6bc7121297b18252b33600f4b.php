Welcome <?php echo e($name['name']); ?>

<?php if($name['status']==0 || $name['status']==1): ?>
<a href="<?php echo e(route('couple.accepteInvition',$name['id'])); ?>"  type="button" class="btn btn-primary">Accept Invition</a>
<a href="<?php echo e(route('couple.rejectInvition',$name['id'])); ?>"  type="button" class="btn btn-success">Reject Invition</a>
<?php elseif($name['status']==2): ?>
<a href="#" class="btn btn-success"> Invition Accepted</a>
<?php elseif($name['status']==3): ?>
<a href="#" class="btn btn-danger"> Invition Rejected</a>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\findmevenues\resources\views/mail/inviteGuest.blade.php ENDPATH**/ ?>