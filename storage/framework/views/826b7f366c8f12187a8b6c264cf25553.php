

<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="/images/pizza-shop.png" class="justify-center" alt="pizza paradise logo">
            <div class="title m-b-md">
                Pizza Paradise <br />
                Malaysia's Best Pizza Store
            </div>
            <p></p>
            <p class="mssg"><?php echo e(session('mssg')); ?></p>
            <a href="/pizzalist/create">Order A Pizza Now!</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEM 8\SECURE PROGRAMMING\assignment2\resources\views//layouts/homepage.blade.php ENDPATH**/ ?>