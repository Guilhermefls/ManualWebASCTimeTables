<?php $__env->startSection('content'); ?>
    <h4>Detalhes do post:</h4>
    <div>
        <h2><?php echo e($post->title); ?>:</h2>
        <p><b>Descrição:</b><?php echo e($post->excerpt); ?></p>
    </div>
    <!--<img src="<?php echo e(Voyager::image($post->image)); ?>" alt="" style="width: 300px; height: 300px"/>-->
    <hr>
    <div>

        <?php echo $post->getConteudo(); ?>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive\Documentos\ManualWebAscTimetables\resources\views/postagens/publicacoes.blade.php ENDPATH**/ ?>