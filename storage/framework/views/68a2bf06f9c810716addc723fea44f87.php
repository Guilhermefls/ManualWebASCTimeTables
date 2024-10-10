<?php $__env->startSection('content'); ?>
    <h1><?php echo e($categoria->name); ?></h1>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('restricoes.mostrarPublicacao',['slug'=>$post->slug])); ?>"><h2><?php echo e($post->title); ?></h2></a>
                <p><?php echo e($post->excerpt); ?></p>
            </li>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive\Documentos\ManualWebAscTimetables\resources\views/postagens/categorias.blade.php ENDPATH**/ ?>