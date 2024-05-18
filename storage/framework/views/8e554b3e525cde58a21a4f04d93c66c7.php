

<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p></p>
          <div>
            <?php echo e($pizza->name); ?> - <?php echo e($pizza->type); ?> - <?php echo e($pizza->base); ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEM 8\SECURE PROGRAMMING\assignment2\resources\views/pizzas/index.blade.php ENDPATH**/ ?>