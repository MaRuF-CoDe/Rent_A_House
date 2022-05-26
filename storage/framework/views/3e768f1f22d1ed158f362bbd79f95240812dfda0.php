<?php $__env->startSection('title','Login'); ?>
    

<?php $__env->startSection('content'); ?>


<div class="container-fluid login-register">
    <div class="row">
      <div class="col-md-3 col-lg-4 col-sm-2 col-xs-2">
      
      </div>
      <div class="col-md-6 col-lg-4  col-sm-8 col-xs-8">
        <div class="card">
          <div class="card-header">
            
            <h3 style="color: white;"> <strong>Login</strong> </h3>
          </div>

          <div class="card-body">
            
             <form action="<?php echo e(route('login')); ?>" method="POST"> 

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
              <input type="text" class="form-control" placeholder="Enter your email" name="email" value="<?php echo e(old('email')); ?>">
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
              </div>
            
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <!--<?php if(Route::has('password.request')): ?>
                    <center> <a class="btn btn-link text-white" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                    </center>
             <?php endif; ?> -->

          </form> 
          </div>
          
        </div>
      </div>
      <div class="col-md-3 col-lg-4  col-sm-2 col-xs-2">
        
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
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/auth/login.blade.php ENDPATH**/ ?>