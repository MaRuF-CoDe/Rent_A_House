<?php $__env->startSection('title'); ?>
    Renter - All Houses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

                <div class="card my-5 mx-4">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>All Available Houses (<?php echo e($housecount); ?>)</strong></h3>
                      
                    </div>
                    <!-- /.card-header -->
                    <?php if($houses->count() > 0): ?>
                    <div class="">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped table-background">
                        <thead>
                        <tr>
                          <th>Address</th>
                          
                          <th>Contact</th>
                          <th>Number of Rooms </th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($house->address); ?></td>
                          
                          <td><?php echo e($house->user->contact); ?></td>
                          <td><?php echo e($house->number_of_room); ?></td>
                          <td>
                            <?php if($house->status == 1): ?>
                                Available
                            <?php else: ?>
                                Not Available
                            <?php endif; ?>
                          </td>
                          <td>
                            <a href="<?php echo e(route('renter.houses.details', $house->id)); ?>"  class="btn btn-success m-2">Details</a>
                           
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>
                      
            </div> <!-- /.card-body -->
              <?php else: ?> 
                 <h2 class="text-center text-info font-weight-bold m-3">No House Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  <?php echo e($houses->links()); ?>

                </div>
                   
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/renter/house/index.blade.php ENDPATH**/ ?>