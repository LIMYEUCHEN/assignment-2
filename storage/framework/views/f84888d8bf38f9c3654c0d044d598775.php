

<?php $__env->startSection('content'); ?>
<div class="wrapper pizza-details">
    <h1>Order for <?php echo e($pizza->name); ?></h1>
    <p class="type">Type - <?php echo e($pizza->type); ?></p>
    <p class="base">Base - <?php echo e($pizza->base); ?></p>
    <p class="toppings">Extra Toppings:</p>
    <ul>
        <?php $__currentLoopData = $pizza->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($topping); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form action="/pizzalist/<?php echo e($pizza->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzalist" class="back">Back to all pizzas</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEM 8\SECURE PROGRAMMING\assignment2\resources\views/pizzas/show.blade.php ENDPATH**/ ?>