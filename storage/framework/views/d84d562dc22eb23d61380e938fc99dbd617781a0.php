<?php $__env->startSection('title', 'Digiplan'); ?>


<?php $__env->startSection('content'); ?>
<div class="bg-primary overflow-hidden p-3 rounded">
	<p class="bg-danger p-1">In this panel you can update the info of your hotel</p>
	<h3 class="text-center">Make the changes to the form below with your new details</h3>
</div>
<h2>Edit Details:</h2>
<div class="row text-dark">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default mb-0 shadow">
            <div class="panel-heading">Edit Details</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="/edit" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <label for="name" class="col-md-4 control-label">Hotel Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e($data->name); ?>" required autofocus>

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
                        <label for="location" class="col-md-4 control-label">Location</label>

                        <div class="col-md-6">
                            <input id="location" type="text" class="form-control" name="location" value="<?php echo e($data->location); ?>" required>

                            <?php if($errors->has('location')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('location')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('file') ? ' has-error' : ''); ?>">
                        <label for="file" class="col-md-4 control-label">Image</label>

                        <div class="col-md-6">
                            <input id="file" type="file" class="hotels-desc-padding" name="image" value="<?php echo e(old('image')); ?>" required>

                            <?php if($errors->has('file')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('file')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>