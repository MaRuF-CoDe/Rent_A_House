<?php $__env->startSection('title'); ?>
    Landlord - All Booked Houses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

                <div class="card my-5 mx-4">
                    <div class="card-header">
                      <h3 class="card-title float-left"><strong>Booked Houses (<?php echo e($books->count()); ?>)</strong></h3>
                      
                    </div>
                    <!-- /.card-header -->
                    <?php if($books->count() > 0): ?>
                    <div class="">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped table-background">
                        <thead>
                        <tr>
                          <th>Address</th>
                          <th>Entry</th>
                          <th>Leave</th>
                          <th>Rent</th>
                          <th>Renter Name</th>
                          <th>Renter Contact</th>
                          <th>Renter Nid</th>
                          <th>Renter Email</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($book->address); ?></td>
                          <td><?php echo e($book->created_at->format('F d, Y')); ?></td>
                          <td><?php echo e($book->leave); ?></td>
                          <td><?php echo e($book->rent); ?></td>
                          <td>
                            <?php if(isset($book->renter->name)): ?>
                                <?php echo e($book->renter->name); ?>

                            <?php else: ?> 
                                This renter is deleted by admin
                            <?php endif; ?>
                          </td>
                          <td>
                            <?php if(isset($book->renter->contact)): ?>
                                <?php echo e($book->renter->contact); ?>

                            <?php else: ?> 
                                This renter is deleted by admin
                            <?php endif; ?>
                          </td>
                          <td>
                            <?php if(isset($book->renter->nid)): ?>
                                <?php echo e($book->renter->nid); ?>

                            <?php else: ?> 
                                This renter is deleted by admin
                            <?php endif; ?>  
                          </td>
                          <td>
                            <?php if(isset($book->renter->email)): ?>
                                <?php echo e($book->renter->email); ?>

                            <?php else: ?> 
                                This renter is deleted by admin
                            <?php endif; ?>
                          </td>
                          <td>
                             
                             <?php if($book->booking_status == "booked"): ?>
                                <button class="btn btn-danger btn-sm" type="button" onclick="leave()">
                                    Leave
                                </button>
                
                                <form id="accept-form" action="<?php echo e(route('landlord.leave.renter', $book->id)); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                             <?php endif; ?>
                            
                             
                          
                            
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>
                      
            </div> <!-- /.card-body -->
              <?php else: ?> 
                 <h2 class="text-center text-info font-weight-bold m-3">No Booking History Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  
                </div>
                   
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('scripts'); ?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script>
     function leave(){
           const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            
            swalWithBootstrapButtons.fire({
                title: 'Are you sure to leave this renter?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes!',
                cancelButtonText: 'No!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    
                    event.preventDefault();
                    document.getElementById('accept-form').submit();
            
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/landlord/booking/currentRenter.blade.php ENDPATH**/ ?>