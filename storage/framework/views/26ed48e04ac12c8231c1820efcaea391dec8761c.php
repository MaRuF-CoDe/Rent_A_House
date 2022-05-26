<?php $__env->startSection('title'); ?>
    Renter List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

                <div class="card my-5 mx-4">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>All Renter (<?php echo e($renters->count()); ?>)</strong></h3>
                
                    </div>
                    <!-- /.card-header -->
                    <?php if($renters->count() > 0): ?>
                    <div class="">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped table-background">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Nid</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $renters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$renter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($renter->name); ?></td>
                          <td><?php echo e($renter->nid); ?></td>
                          <td><?php echo e($renter->username); ?></td>
                          <td><?php echo e($renter->email); ?></td>
                          <td><?php echo e($renter->contact); ?></td>
                          <td>
                            <button class="btn btn-danger m-2" type="button" onclick="deleteRenter(<?php echo e($renter->id); ?>)">
                                Remove
                            </button>
            
                          <form id="delete-form-<?php echo e($renter->id); ?>" action="<?php echo e(route('admin.remove.renter',$renter->id)); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                              
                          </form>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>
                      
            </div> <!-- /.card-body -->
              <?php else: ?> 
                 <h2 class="text-center text-info font-weight-bold m-3">No House Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  <?php echo e($renters->links()); ?>

                </div>
                   
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('scripts'); ?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script type="text/javascript">
 function deleteRenter(id){
     const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
          title: 'Are you sure to remove this user?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, remove it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
      }).then((result) => {
          if (result.value) {
              
              event.preventDefault();
              document.getElementById('delete-form-'+id).submit();
      
          } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
          ) {
          swalWithBootstrapButtons.fire(
              'Cancelled',
          )
          }
      })
 }	

 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/admin/manageRenter/index.blade.php ENDPATH**/ ?>