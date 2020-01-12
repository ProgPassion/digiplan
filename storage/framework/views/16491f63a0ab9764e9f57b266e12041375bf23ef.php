<?php $__env->startSection('title', 'Digiplan'); ?>


<?php $__env->startSection('content'); ?>
<div class="bg-primary overflow-hidden p-3 rounded">
	<span class="d-inline-block float-left hotels-desc-padding">
		Go back to all hotels page
	</span>
	<span class="d-inline-block float-right">
			<a class="btn btn-warning" href="/hotels">All Hotels</a>
	</span>
</div>
<h2>Hotel Detail</h2>
<div class="bg-white rounded text-dark hotels-desc-padding">
	<div class="main-hotel-detail">
		<h3 class="text-center">Main Hotel-Detail</h3>
		<img src="/storage/<?php echo e($data->img_path); ?>" />
		<div class="main-hotel-detail-label">
			<p>Hotel name</p>
			<p>Hotel location</p>
			<p>Nr of rooms</p>
		</div>
		<div class="main-hotel-detail-data">
			<p><?php echo e($data->name); ?></p>
			<p><?php echo e($data->location); ?></p>
			<p>200</p>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>