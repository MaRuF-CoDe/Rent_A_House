<?php $__env->startSection('title'); ?>
Rent A House - Search Result
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid">
    <div class="row justify-content-center py-5 area-wise-show">
        <h2 class="text-center">Search Result: <strong>"<?php echo e($houses->count()); ?>"</strong> results found</h2>
        <br>
    </div>
</div>
<div class="container">
    <div class="row my-5" id="content">
        <?php $__empty_1 = true; $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
            <div class="card m-3">
                <div class="card-header">
                    <img src="<?php echo e(asset('storage/featured_house/'. $house->featured_image)); ?>" width="100%"
                        class="img-fluid" alt="Card image">
                </div>
                <div class="card-body">
                    <p>
                        <h4><strong><i class="fas fa-map-marker-alt"> <?php echo e($house->area->name); ?>, Pabna</i> </strong>
                        </h4>
                    </p>

                    <p class="grey"><a class="address" href="<?php echo e(route('house.details', $house->id)); ?>"><i
                                class="fas fa-warehouse"> <?php echo e($house->address); ?></i></a> </p>
                    <hr>
                    <p class="grey"><i class="fas fa-bed"></i> <?php echo e($house->number_of_room); ?> Bedrooms <i
                            class="fas fa-bath float-right"> <?php echo e($house->number_of_toilet); ?> Bathrooms</i> </p>
                    <p class="grey">
                        <h4>৳ <?php echo e($house->rent); ?> BDT</i></h4>
                    </p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="<?php echo e(route('house.details', $house->id)); ?>" class="btn btn-info">Details</a>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h2 class="m-auto py-2 text-white bg-dark p-3 area-wise-not-available">No Houses Found</h2>
        <?php endif; ?>
    </div>
    <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger mb-5">Go Back</a>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/search.blade.php ENDPATH**/ ?>