<header>

  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div>
          <a href="<?php echo e(route('welcome')); ?>"> <img src="<?php echo e(asset('frontend/img/house.png')); ?>"
              style="height: 80px; width: 140px" alt="logo" class="my-2 mx-2 text-center">
          </a>
          
          
        </div>

      </div>
    </div>
  </div>

  

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('house.all')); ?>">All Available Houses</a>
        </li>


        <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
        <?php else: ?>
        <?php if(Auth::user()->role_id == 2): ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('landlord.dashboard')); ?>">Dashboard</a></li>
        <?php endif; ?>
        <?php if(Auth::user()->role_id == 3): ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('renter.dashboard')); ?>">Dashboard</a></li>
        <?php endif; ?>
        <?php if(Auth::user()->role_id == 1): ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
        <?php endif; ?>
        <?php endif; ?>
      </ul>
    </div>
  </nav>


</header>

<script type="text/javascript">
  var date = new Date();
  var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  var months = ["January","February","March","April","May","June","July","August","September", "October", "November", "December"];
  document.getElementById("time").innerHTML = '<strong>' + days[date.getDay()] + '</strong>' + ', ' + months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();

  
</script><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/layouts/frontend/partial/header.blade.php ENDPATH**/ ?>