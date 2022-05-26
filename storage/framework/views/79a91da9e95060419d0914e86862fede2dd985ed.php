<?php if(session('success')): ?>
<div class="alert alert-success mt-3" id="alert" roles="alert">
    <?php echo e(session('success')); ?> 
</div> 
<?php endif; ?>  


<?php if(session('danger')): ?>
<div class="alert alert-danger mt-3" id="alert" roles="alert">
    <?php echo e(session('danger')); ?> 
</div> 
<?php endif; ?>  <?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/partial/successMessage.blade.php ENDPATH**/ ?>