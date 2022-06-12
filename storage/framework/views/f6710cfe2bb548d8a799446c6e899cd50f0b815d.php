<?php $__env->startSection('title'); ?>
   Profile Info
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container card">
    <div class="row my-3">
        <h2 class="m-auto"><strong>Profile Information</strong></h2>
    </div>
    <div class="row p-3">
        <div class="col-md-4 text-center">
        <img src="<?php echo e($profile->image != null ? asset('storage/profile_photo/'. $profile->image) : asset('backend/img/user2-160x160.jpg')); ?>" 
        style="height: 200px; width: 170px; margin-top:90px" class="elevation-2" alt="User Image">
        </div>
        <div class="col-md-8">
            <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <a href="<?php echo e(route('renter.profile.edit', $profile->id)); ?>" class="btn btn-info float-right my-4" >Edit Profile</a>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo e($profile->name); ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?php echo e($profile->username); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo e($profile->email); ?></td>
                    </tr>
                    <tr>
                        <th>Nid</th>
                        <td><?php echo e($profile->nid); ?></td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td><?php echo e($profile->contact); ?></td>
                    </tr>

                </table>
              </div>
            
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/renter/profile/index.blade.php ENDPATH**/ ?>