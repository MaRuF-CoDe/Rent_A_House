<?php $__env->startSection('title'); ?>
   Details - <?php echo e($house->address); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                          <div>
                              <h3><strong>House Details</strong></h3>
                          </div>
                          <div>
                           
                            <?php if(Auth::user()->role_id == 3): ?>
                            <button class="btn btn-warning" type="button" onclick="renterBooking(<?php echo e($house->id); ?>)">
                                Apply for booking
                            </button>
            
                            <form id="booking-form-<?php echo e($house->id); ?>" action="<?php echo e(route('payment')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($house->id); ?>">
                            </form>

                            <form id="booking-form-<?php echo e($house->id); ?>" action="<?php echo e(route('payment')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($house->id); ?>">
                            </form>
                            <?php endif; ?>
                              <a class="btn btn-danger" href="<?php echo e(route('renter.allHouses')); ?>"> Back</a>
                          </div>
                      </div>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo e($house->address); ?></td>
                                </tr>
                                <tr>
                                    <th>Area</th>
                                    <td><?php echo e($house->area->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Owner</th>
                                    <td><?php echo e($house->user->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td><?php echo e($house->contact); ?></td>
                                </tr>
                                <tr>
                                    <th>Number of rooms</th>
                                    <td><?php echo e($house->number_of_room); ?></td>
                                </tr>

                                <tr>
                                    <th>Number of toilet</th>
                                    <td><?php echo e($house->number_of_toilet); ?></td>
                                </tr>

                                <tr>
                                    <th>Number of belcony</th>
                                    <td><?php echo e($house->number_of_belcony); ?></td>
                                </tr>

                                <tr>
                                    <th>Rent</th>
                                    <td><?php echo e($house->rent); ?></td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <?php if($house->status == 1): ?>
                                            <span class="btn btn-success">Available</span>
                                        <?php else: ?>
                                            <span class="btn btn-danger">Not Available</span>
                                        <?php endif; ?>
                                </td>
                                </tr>

                                

                                
                                    <?php if($alreadyReviewed != null): ?>
                                        <tr>
                                            <th>Your Review</th>
                                            <td style="text-align: justify"><?php echo e($alreadyReviewed->opinion); ?>

                                            <br><a href="<?php echo e(route('renter.review.edit', $alreadyReviewed->id)); ?>" class="btn btn-info btn-sm my-2">Edit</a></td>
                                            
                                        </tr>
                                    <?php endif; ?>
                                


                                <?php if($stayOnceUponATime!=null): ?>
                                    <?php if($alreadyReviewed == null): ?>
                                    <tr>
                                        <th>
                                            Enter Review
                                        </th>
                                        <td>
                                            <form action="<?php echo e(route('renter.review')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="form group">
                                                    <textarea class="form-control" name="opinion" cols="30" rows="6" placeholder="enter here..."></textarea>
                                                </div>
                                                <input type="hidden" name="house_id" value="<?php echo e($house->id); ?>">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endif; ?>

                                
                            </table>
                          </div>

                          <div class="row gallery">
                            <?php $__currentLoopData = json_decode($house->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="col-md-3">
                                           <a href="<?php echo e(asset('images/'.$picture)); ?>">
                                                       <img  src="<?php echo e(asset('images/'.$picture)); ?>" class="img-fluid m-2"
                                                        style="height: 150px;width: 100%; ">
                                           </a>
                                       </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </div>
                    </div>
                   
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>


 <?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
   window.addEventListener('load', function() {
        baguetteBox.run('.gallery', {
            animation: 'fadeIn',
            noScrollbars: true
        });
   });

   function renterBooking(id){
           const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            
            swalWithBootstrapButtons.fire({
                title: 'Are you sure to booking this house?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('booking-form-'+id).submit();
                
                    } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                    ) {
                    swalWithBootstrapButtons.fire(
                        'Not Now!',
                        
                    )
                }
            })
       }

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/renter/house/show.blade.php ENDPATH**/ ?>