

<?php $__env->startSection('content'); ?>
<div class="wrapper create-pizza">
    <h1>Create A New Pizza</h1>
    <form action="/pizzalist" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Choose Pizza Type: </label>
        <select name="type" id="type">
            <option value="Hawaiian Chicken">Hawaiian Chicken</optipn>
            <option value="Tuna Temptation">Tuna Temptation</option>
            <option value="Aloha Chicken">Aloha Chicken</option>
        </select>

        <label for="base">Choose Base Type:</label>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</optipn>
            <option value="Thin Crust">Thin Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
        </select>
        <fieldset>
            <label">Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza !">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UTM\SEM 8\SECURE PROGRAMMING\assignment2\resources\views/pizzas/create.blade.php ENDPATH**/ ?>