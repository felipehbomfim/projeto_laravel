<?php
/**
 * Created by PhpStorm.
 * User: Felipe Bomfim (@felipehbomfim)
 * Date: 28/01/2022
 * Time: 12:42
 */
?>

<?php $__env->startSection('cabecalho'); ?>
Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<?php if(!empty($mensagem)): ?>
<div class="alert alert-success">
    <?php echo e($mensagem); ?>

</div>
<?php endif; ?>
<a href="<?php echo e(route('form_criar_serie')); ?>" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo e($serie->nome); ?>

            <form method="post" action="/projeto_inicial/remover/<?php echo e($serie->id); ?>" onsubmit="return confirm('Tem certeza?')">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm btn-danger text-left"><i class="fa fa-trash-o"></i></button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php_laravel\projeto_inicial\resources\views/series/index.blade.php ENDPATH**/ ?>