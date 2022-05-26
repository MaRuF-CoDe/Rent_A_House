<?php $__env->startSection('title','Register'); ?>
    
<?php $__env->startSection('content'); ?>




<div class="container-fluid login-register">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2">
      
      </div>
      <div class="col-md-6 col-lg-6  col-sm-8 col-xs-8">
        <div class="card">
          <div class="card-header">
            
            <h3 style="color: white;"> <strong>Register</strong> </h3>
          </div>

          <div class="card-body">
            
             <form action="<?php echo e(route('register')); ?>" method="POST"> 
               <?php echo csrf_field(); ?>

               <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                <?php endif; ?>



            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo e(old('name')); ?>">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your username" name="username" value="<?php echo e(old('username')); ?>">
            </div>


            <div class="input-group mb-3">
               <select name="role_id" class="form-control" value="<?php echo e(old('role_id')); ?>">
                        <option value="">select a role</option>
                        <option value="2" <?php echo e(old('role_id') == 2 ? 'selected' : ''); ?> >Landlord</option>
                        <option value="3" <?php echo e(old('role_id') == 3 ? 'selected' : ''); ?> >Renter</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nid number" name="nid" value="<?php echo e(old('nid')); ?>">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="contact (please add 88 before number)" name="contact" value="<?php echo e(old('contact')); ?>">
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="email" name="email" value="<?php echo e(old('email')); ?>">
            </div>

            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control" placeholder="password (must be 8 digits)" name="password">
            </div>


            <div class="input-group mb-3">
                <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" >

            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        
          </form> 
          </div>
          
        </div>
      </div>
      <div class="col-md-3 col-lg-3  col-sm-2 col-xs-2">
        
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css'); ?>
<style>
    .card{
        background: black;
        background-color: rgba(0,0,0,.5);
        margin-top: 70px;
        margin-bottom: 70px;
    }
    .icon {
        font-size: 25px;
    }

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/auth/register.blade.php ENDPATH**/ ?>