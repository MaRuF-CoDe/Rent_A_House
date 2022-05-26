<?php $__env->startSection('title'); ?>
    All Areas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
             
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

              <div class="card mt-5">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Our All Areas (<?php echo e($areacount); ?>)</strong></h3>
                      
                    <a href="<?php echo e(route('landlord.area.create')); ?>" class="btn btn-success btn-md float-right c-white">Add new area <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <?php if($areas->count() > 0): ?>
                    <div class="">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped table-background">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Added</th>
                          <th>Number of House </th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($area->name); ?></td>
                          <td><?php echo e($area->created_at->toFormattedDateString()); ?></td>
                          <td><?php echo e($area->houses->count()); ?></td>
                          <td>
                            
                            <?php if($area->user_id == Auth::id()): ?>
                              <a href="<?php echo e(route('landlord.area.edit', $area->id)); ?>"  class="btn btn-info">Edit</a>
                              <button class="btn btn-danger" type="button" onclick="deleteArea(<?php echo e($area->id); ?>)">
                                Delete
                              </button>
                            <?php else: ?> 
                              Created By <?php echo e($area->user->name); ?>

                            <?php endif; ?>
                           
                          <form id="delete-form-<?php echo e($area->id); ?>" action="<?php echo e(route('landlord.area.destroy',$area->id)); ?>" method="POST" style="display: none;">
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
                 <h2 class="text-center text-info font-weight-bold m-3">No Area Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  <?php echo e($areas->links()); ?>

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
 function deleteArea(id){
     const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
          title: 'Are you sure to delete this area?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/landlord/area/index.blade.php ENDPATH**/ ?>