<?php $__env->startSection('title'); ?>
    Renter - All Areas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
             
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

              <div class="card mt-5">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Our All Areas (<?php echo e($areacount); ?>)</strong></h3>
                      
                    </div>
                    <!-- /.card-header -->
                    <?php if($areas->count() > 0): ?>
                    <div class="">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped table-background">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Added</th>
                          <th>Number of House</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($area->name); ?></td>
                          <td><?php echo e($area->created_at->toFormattedDateString()); ?></td>
                          <td><?php echo e($area->houses->count()); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>
                      
            </div> <!-- /.card-body -->
              <?php else: ?> 
                 <h2 class="text-center text-info font-weight-bold m-3">No Area Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  <?php echo e($areas->links()); ?>

                </div>
                   
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/renter/area/index.blade.php ENDPATH**/ ?>