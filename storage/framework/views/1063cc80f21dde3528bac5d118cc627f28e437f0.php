<?php $__env->startSection('title', 'Digiplan'); ?>


<?php $__env->startSection('content'); ?>
<div class="bg-primary overflow-hidden p-3 rounded">
	<span class="d-inline-block float-left hotels-desc-padding">
		If you want to promote your hotel to this site the button
	</span>
	<span class="d-inline-block float-right">
		<?php if(is_object($data['userOwnHotel'])): ?>
			<a class="btn btn-warning" href="/hotel/<?php echo e($data['userOwnHotel']->id); ?>/edit">Edit</a>
		<?php else: ?>
			<a class="btn btn-warning" href="/create">Create</a>
		<?php endif; ?>	
	</span>
</div>
<h2>Hotels</h2>
<div class="bg-white rounded text-dark hotels-desc-padding">
	<?php $__currentLoopData = $data['hotels']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="hotel-desc-wrapper">
		<div class="img-container">
			<img src="/storage/<?php echo e($hotel->img_path); ?>" />
		</div>
		<div class="hotel-detail-info">
			<table class="table">
					<tr>
						<td colspan="2"><h3>Hotel Info</h2></td>
					</tr>
					<tr>
						<td>Hotel:</td>
						<td><strong><?php echo e($hotel->name); ?><strong></td>
					</tr>
					<tr>
						<td>Location:</td>
						<td><strong><?php echo e($hotel->location); ?></strong></td>
					</tr>
					<tr>
						<td class="text-center" colspan="2"><strong><a href="/hotel/<?php echo e($hotel->id); ?>">View Details</a></strong></td>
					</tr>
			</table>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>