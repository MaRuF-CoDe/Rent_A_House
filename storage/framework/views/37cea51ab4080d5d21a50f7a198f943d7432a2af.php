<?php $__env->startSection('title'); ?>
   Add House
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Add New House</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('landlord.house.store')); ?>" method="POST" enctype="multipart/form-data">
					        <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="address">Address: </label>
					          <input type="text" class="form-control" placeholder="Enter address" id="address" name="address" value="<?php echo e(old('address')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="area">Area </label>
                                <select name="area_id" class="form-control" id="area_id">
                                    <option value="">select an area</option>
                                    <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($area->id); ?>"  <?php echo e(old('area_id') == $area->id ? 'selected' : ''); ?> ><?php echo e($area->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>
                            
                            <div class="form-group">
                                <label for="number_of_room">Number of  rooms: </label>
                                <input type="text" class="form-control" placeholder="number_of_room" id="number_of_room" name="number_of_room" value="<?php echo e(old('number_of_room')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="number_of_toilet">Number of toilet: </label>
                                <input type="text" class="form-control" placeholder="number_of_toilet" id="number_of_toilet" name="number_of_toilet" value="<?php echo e(old('number_of_toilet')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="number_of_belcony">Number of  belcony: </label>
                                <input type="text" class="form-control" placeholder="number_of_belcony" id="number_of_belcony" name="number_of_belcony" value="<?php echo e(old('number_of_belcony')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="rent">Rent: </label>
                                <input type="text" class="form-control" placeholder="rent" id="rent" name="rent" value="<?php echo e(old('rent')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image</label>
                                <input type="file" name="featured_image" class="form-control" id="featured_image">
                            </div>
        
                            <div class="form-group">
                                <label for="images">House Images</label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
					      

                            <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add</button>
                                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-danger wave-effect" >Back</a>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/landlord/house/create.blade.php ENDPATH**/ ?>