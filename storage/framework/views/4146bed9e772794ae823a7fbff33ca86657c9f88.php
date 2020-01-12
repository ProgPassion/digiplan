<?php $__env->startSection('title', 'Digiplan'); ?>


<?php $__env->startSection('content'); ?>
<h3 class="text-center">Welcome to Digiplan!</h3>
<br>
<p>This is digiplan, a great platform where you can manage your hotel with a nice and easy interface. More than that you have a nice chat integrated where you can connect with different travel agencies to create special contracts with them. Down below you have the register place where you can enter your credencials. First you must register as a user then you have the option to create a hotel connected with your user account.</p>
<hr class="hr-white"> 
<?php if(Route::has('login')): ?>
    <div class="text-center">
        <?php if(auth()->guard()->check()): ?>
            <a class="btn btn-primary" href="<?php echo e(url('/hotels')); ?>">Main Page</a>
            <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        <?php else: ?>
            <a class="btn btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
            <a class="btn btn-primary" href="<?php echo e(route('register')); ?>">Register</a>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>