<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/custom.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
  <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
    <?php echo $__env->make('layouts.backend.inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    <?php echo $__env->make('layouts.backend.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <!-- Control Sidebar -->
  <?php echo $__env->make('layouts.backend.inc.control-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="<?php echo e(asset('backend/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/custom.js')); ?>"></script>

<script>
  setTimeout(function() {
      $('#alert').fadeOut('fast');
  }, 8000);
</script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/layouts/backend/app.blade.php ENDPATH**/ ?>