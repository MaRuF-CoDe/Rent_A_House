<?php $__env->startSection('title'); ?>
   Add Area
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Add New Area</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('admin.area.store')); ?>" method="POST" >
					        <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="name" style="color:#14455F;">Name: </label>
					          <input type="text" class="form-control" placeholder="Enter area name" id="name" name="name" value="<?php echo e(old('name')); ?>">
					        </div>
					      

                        <div class="form-group">
                                <button type="submit" class="btn btn-success">Add</button>
                                <a href="<?php echo e(route('admin.area.index')); ?>" class="btn btn-danger wave-effect" >Back</a>
                        </div> 
                  </form>
                     
                      
                    </div>
                   
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/admin/area/create.blade.php ENDPATH**/ ?>