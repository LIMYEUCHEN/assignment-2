<?php $__env->startSection('content'); ?>
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

        <div class="content">
            <img src="/images/pizza-shop.png" class="justify-center" alt="pizza paradise logo">
            <div class="title m-b-md">
                Pizza Paradise <br />
                Malaysia's Best Pizza Store
            </div>
            <p></p>
            <p class="mssg"><?php echo e(session('mssg')); ?></p>
            <a href="/pizzalist/create">Order A Pizza Now!</a>
            <p></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEM 8\SECURE PROGRAMMING\assignment2\resources\views/welcome.blade.php ENDPATH**/ ?>