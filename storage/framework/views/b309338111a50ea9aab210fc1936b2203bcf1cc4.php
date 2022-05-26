<?php $__env->startSection('title'); ?>
  Rent A House
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>
    <div id="search">
        <div class="container-fluid">
            <div class="row justify-content-center py-4">
                <h2 class="text-center"><strong>Search a house of your choice</strong></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <form action="<?php echo e(route('search')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <div class="row justify-content-center">
                            <?php if(session('search')): ?>
                                <div class="alert alert-danger mt-3" id="alert" roles="alert">
                                    <?php echo e(session('search')); ?> 
                                </div> 
                            <?php endif; ?> 
                        </div> 
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" name="address" placeholder="search an area" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                
                                <select name="room"  class="form-control">
                                    <option value="" >rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                
                                <select name="bathroom"  class="form-control">
                                    <option value="" >bathroom</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" name="rent" placeholder="rent" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
       <div class="container">
        <div class="row justify-content-center py-5">
            <h1><strong>Available Houses</strong></h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-9">
                
                   <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-6">
                                <div class="card m-3 house-card">
                                    <div class="card-header">
                                        <img  src="<?php echo e(asset('storage/featured_house/'. $house->featured_image)); ?>" width="100%" class="img-fluid" alt="Card image">
                                    </div>
                                    <div class="card-body">
                                        <p><h4><strong><i class="fas fa-map-marker-alt"> <?php echo e($house->area->name); ?>, Pabna</i> </strong></h4></p>
                                    
                                        <p class="grey"><a class="address" href="<?php echo e(route('house.details', $house->id)); ?>"><i class="fas fa-warehouse"> <?php echo e($house->address); ?></i></a> </p>
                                        <hr>
                                        <p class="grey"><i class="fas fa-bed"></i> <?php echo e($house->number_of_room); ?> Bedrooms  <i class="fas fa-bath float-right"> <?php echo e($house->number_of_toilet); ?> Bathrooms</i> </p>
                                        <p class="grey"><h4>৳ <?php echo e($house->rent); ?> BDT</i></h4> </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href="<?php echo e(route('house.details', $house->id)); ?>" class="btn btn-info">Details</a>
                                            </div>
                                            <div>
                                                
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                            <h2 class="m-auto py-2 text-white bg-dark p-3">House Not Available right now</h2>
                        <?php endif; ?>
                   </div>
                   
                   <div class="panel-heading my-4" style="display:flex; justify-content:center;align-items:center;">
                       <a href="<?php echo e(route('house.all')); ?>" class="btn btn-dark">See All Houses</a>
                    </div>
                    
                   
            </div>
            <div class="col-md-3">
                <ul class="list-group sort">
                    <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Search By Range</strong></li>
                    <form action="<?php echo e(route('searchByRange')); ?>" method="get" class="mt-2">
                        <div class="form-group">
                            <input type="number" class="form-control" required name="digit1" placeholder="enter range (lower value)">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" required name="digit2" placeholder="enter range (upper value)">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success btn-block">Search</button>
                        </div>
                    </form>
                </ul>




                    <ul class="list-group sort">
                        <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Sort By Price</strong></li>
                        <li class="list-group-item order"><a href="<?php echo e(route('highToLow')); ?>">High to low</a></li>
                        <li class="list-group-item order"><a href="<?php echo e(route('lowToHigh')); ?>">Low to High</a></li>
                        <li class="list-group-item order"><a href="<?php echo e(route('welcome')); ?>">Normal Order</a></li>
                    </ul>



                    <ul class="list-group area-show">
                        <li class="list-group-item bg-dark text-light sidebar-heading"><strong>Areas</strong></li>
                        <?php $__empty_1 = true; $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="list-group-item all-areas">
                                <a href="<?php echo e(route('available.area.house', $area->id)); ?>" class="area-name"><?php echo e($area->name); ?> <strong>(<?php echo e($area->houses->count()); ?>)</strong></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>  
                            <li class="list-group-item">Area not found</li>
                        <?php endif; ?>
                        
                    </ul>
            </div>
        </div>
       
       </div>
    </div>



    <div class="section-4 bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<img src="<?php echo e(asset('frontend/img/why.jpg')); ?>" class="section-4-img img-fluid" width="500px;" height="500px;">
				</div>
				<div class="col-md-5">
					<h1 class="text-white">Why Choose Us?</h1>
					
					<p class="para-1"> It’s our attention to the small stuff, scheduling of timelines and keen project management that makes us stand out from the rest. We are creative, while keeping a close eye on the houses and your comfort.	</p>
                    <a href="#" style="text-decoration: none">Join Us</a>
				</div>
			</div>
		</div>
	</div>



    <section id="our-story">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="story">Our Story</h1>
              <p class="pera">Our aim is to reduce the Complexity of finding house for the tenant and also Complexity of finding tenant for the landlord. </p>
  
              <p class="pera">This site will save time and It will reduce the cost of finding home for the renter.</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo e(asset('frontend/img/about-us.png')); ?>" class="img-fluid">
            </div>
          </div>
        </div>
      </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rent_A_House\resources\views/welcome.blade.php ENDPATH**/ ?>