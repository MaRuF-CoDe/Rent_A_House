
<aside class="main-sidebar sidebar-dark-light elevation-4" style="background-color: #14455F;overflow-y:auto;">
  <!-- Brand Logo -->
  

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image text-center">
        <img
          src="<?php echo e(Auth::user()->image != null ? asset('storage/profile_photo/'. Auth::user()->image) : asset('backend/img/user2-160x160.jpg')); ?>"
          style="height: 100px; width: 100px" class="img-circle elevation-2" alt="User Image">
        <br>
        <div style="color: honeydew;line-height: 4px; font-weight: 600" class="text-center mt-3 info">
          <p>Name: <?php echo e(Auth::user()->name); ?></p>
          <p>Email: <?php echo e(Auth::user()->email); ?></p>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <?php if(Request::is('admin*')): ?>
        <li class="nav-item has-treeview active">
          <a href="<?php echo e(route('admin.dashboard')); ?>"
            class="nav-link <?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
            <i class="fas fa-border-style"></i>
            <p class="ml-2">
              Dashboard
            </p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.area.index')); ?>" class="nav-link <?php echo e(Request::is('admin/area*') ? 'active' : ''); ?>">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="pl-2">Areas</p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.house.index')); ?>" class="nav-link <?php echo e(Request::is('admin/house*') ? 'active' : ''); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p class="pl-2">
              Houses
            </p>
          </a>
        </li>




        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.manage.landlord')); ?>"
            class="nav-link <?php echo e(Request::is('admin/manage-landlord') ? 'active' : ''); ?>">
            <i class="fas fa-laptop-house"></i>
            <p class="pl-2">
              Manage Landlords
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.manage.renter')); ?>"
            class="nav-link <?php echo e(Request::is('admin/manage-renter') ? 'active' : ''); ?>">
            <i class="fas fa-users-cog"></i>
            <p class="pl-2">
              Manage Renter
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.profile.show')); ?>"
            class="nav-link <?php echo e(Request::is('admin/profile-info') ? 'active' : ''); ?>">
            <i class="fas fa-user"></i>
            <p class="pl-2">
              Profile Info
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.booked.list')); ?>"
            class="nav-link <?php echo e(Request::is('admin/booked-houses-list') ? 'active' : ''); ?>">
            <i class="fas fa-store-alt-slash"></i>
            <p class="pl-2">
              Booked Houses
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.history.list')); ?>"
            class="nav-link <?php echo e(Request::is('admin/booked-houses-history') ? 'active' : ''); ?>">
            <i class="fas fa-history"></i>
            <p class="pl-2">
              Booking History
            </p>
          </a>
        </li>


        <?php endif; ?>

        <?php if(Request::is('landlord*')): ?>
        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.dashboard')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/dashboard') ? 'active' : ''); ?>">
            <i class="fas fa-border-style"></i>
            <p class="pl-2">
              Dashboard
            </p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.area.index')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/area*') ? 'active' : ''); ?>">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="pl-2">Area</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.house.index')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/house*') ? 'active' : ''); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p class="pl-2">
              House
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.profile.show')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/profile-info*') ? 'active' : ''); ?>">
            <i class="fas fa-user"></i>
            <p class="pl-2">
              Profile Info
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.bookingRequestList')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/booking-request-list') ? 'active' : ''); ?>">
            <i class="fas fa-chalkboard"></i>
            <p class="pl-2">
              Pending Request
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.currently.staying')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/booked/currently/renter') ? 'active' : ''); ?>">
            <i class="fas fa-store-alt-slash"></i>
            <p class="pl-2">
              Booked Houses
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('landlord.history')); ?>"
            class="nav-link <?php echo e(Request::is('landlord/booking/history') ? 'active' : ''); ?>">
            <i class="fas fa-history"></i>
            <p class="pl-2">
              Booking History
            </p>
          </a>
        </li>
        <?php endif; ?>


        <?php if(Request::is('renter*')): ?>
        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.dashboard')); ?>"
            class="nav-link <?php echo e(Request::is('renter/dashboard') ? 'active' : ''); ?>">
            <i class="fas fa-border-style"></i>
            <p class="pl-2">
              Dashboard

            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.areas')); ?>" class="nav-link <?php echo e(Request::is('renter/areas') ? 'active' : ''); ?>">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="pl-2">Areas</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.profile.show')); ?>"
            class="nav-link <?php echo e(Request::is('renter/profile-info*') ? 'active' : ''); ?>">
            <i class="fas fa-user"></i>
            <p class="pl-2">
              Profile Info
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.allHouses')); ?>" class="nav-link <?php echo e(Request::is('renter/house*') ? 'active' : ''); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p class="pl-2">
              House
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.booking.history')); ?>"
            class="nav-link <?php echo e(Request::is('renter/booking/history') ? 'active' : ''); ?>">
            <i class="fas fa-history"></i>
            <p class="pl-2">
              History

            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('renter.booking.pending')); ?>"
            class="nav-link <?php echo e(Request::is('renter/pending/booking') ? 'active' : ''); ?>">
            <i class="fas fa-chalkboard"></i>
            <p class="pl-2">
              Pending Booking
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('welcome')); ?>" class="nav-link">
            <i class="fas fa-border-style"></i>
            <p class="pl-2">
              Go To Home Page
            </p>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/layouts/backend/inc/sidebar.blade.php ENDPATH**/ ?>