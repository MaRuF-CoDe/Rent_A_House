<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card my-5">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3><strong>House Details</strong></h3>

                        </div>
                        <div>
                            <a class="btn btn-danger" href="<?php echo e(route('welcome')); ?>"> Back</a>

                            <?php if(auth()->guard()->guest()): ?>
                            <a href="" onclick="guestBooking()" class="btn btn-info">Apply for booking</a>
                            <?php else: ?>

                            <?php if(Auth::user()->role_id == 3): ?>
                            <button class="btn btn-info" type="button" onclick="renterBooking(<?php echo e($house->id); ?>)">
                                Apply for booking
                            </button>

                            <form id="booking-form-<?php echo e($house->id); ?>" action="<?php echo e(route('booking', $house->id)); ?>"
                                method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                            <?php endif; ?>
                            <?php endif; ?>
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
                                <th>Owner Name</th>
                                <td><?php echo e($house->user->name); ?></td>
                            </tr>
                            <tr>
                                <th>Owners Contact</th>
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
                            <tr>
                                <th>Share</th>
                                <td>
                                    <div class="addthis_inline_share_toolbox"></div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="row gallery">
                        <?php $__currentLoopData = json_decode($house->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <a href="<?php echo e(asset('images/'.$picture)); ?>">
                                <img src="<?php echo e(asset('images/'.$picture)); ?>" class="img-fluid m-2"
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



    <?php if($house->reviews->count() > 0): ?>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card my-5">
                <div class="card-header bg-dark text-white">
                    <strong>Renter Reviews of this house (<?php echo e($house->reviews->count()); ?>)</strong>
                </div>

                <div class="card-body">
                    <?php $__currentLoopData = $house->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <img class="mr-3"
                                src="<?php echo e($review->user->image!=null ? asset('storage/profile_photo/'. $review->user->image) : asset('storage/profile_photo/default.png')); ?>"
                                width="35" height="35"
                                style="border-radius: 50%"><strong><?php echo e($review->user->name); ?></strong>
                        </div>
                        <div class="card-body">
                            <p class="text-justify">
                                <?php echo e($review->opinion); ?>

                            </p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>



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

   function guestBooking(){
                Swal.fire(
                    'If you want to booking this house',
                    'Then you must have to login first as a renter',
                )
                event.preventDefault();     
    }

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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5fb96836345445"></script>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/houseDetails.blade.php ENDPATH**/ ?>