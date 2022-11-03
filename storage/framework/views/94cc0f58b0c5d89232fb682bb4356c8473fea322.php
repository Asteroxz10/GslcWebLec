
<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
    <br><br><br><br>
    <center><h1 style="color: blue ; font-size: 32px">Pokedex</h1></center>

    <?php $__currentLoopData = $pokemonData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e($pokemon->image_url); ?>" alt="" style="margin-bottom: 4%" > 
    <div style="float: right;">
        <h1 style="margin-right: 24px"><?php echo e($pokemon->name); ?></h1>
        <h2 style="width: 50%"><?php echo e($pokemon->type); ?></h2>
        <h2 style="width: 50%;"><?php echo e($pokemon->description); ?></h2>
    </div>  
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\webprog2\resources\views/home.blade.php ENDPATH**/ ?>