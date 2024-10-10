<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section>
    <header class="main">
        <a href="<?php echo e(route("restricoes.mostrarPublicacao",["slug"=>$manual->slug])); ?>"><h2><?php echo e($manual->title); ?></h2></a>
    </header>
    <p><?php echo e($manual->excerpt); ?></p>
</section>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive\Documentos\ManualWebAscTimetables\resources\views/manuais/listagem.blade.php ENDPATH**/ ?>