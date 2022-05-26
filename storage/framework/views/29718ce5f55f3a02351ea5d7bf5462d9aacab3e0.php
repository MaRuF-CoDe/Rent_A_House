<?php $__env->startSection('title'); ?>
   Edit Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Edit Profile</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="name">Name: </label>
					          <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="<?php echo e(old('name', $profile->name)); ?>">
                            </div>

                            <div class="form-group">
                                <label for="username">Username: </label>
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo e(old('username', $profile->username)); ?>">
                              </div>

                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo e(old('email', $profile->email)); ?>">
                            </div>

                            <div class="form-group">
                                <label for="nid">Nid: </label>
                                <input type="text" class="form-control" placeholder="Nid" id="nid" name="nid" value="<?php echo e(old('nid', $profile->nid)); ?>">
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact: </label>
                                <input type="text" class="form-control" placeholder="contact (please add 88 before number)" id="contact" name="contact" value="<?php echo e(old('contact', $profile->contact)); ?>">
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Picture</label>
                                <input type="file" name="image" class="form-control">
                            </div> 

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="<?php echo e(route('admin.profile.show')); ?>" class="btn btn-danger wave-effect" >Back</a>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>