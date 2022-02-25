<?php
/**
 * Created by PhpStorm.
 * User: Felipe Bomfim (@felipehbomfim)
 * Date: 28/01/2022
 * Time: 14:35
 */
?>

<?php $__env->startSection('cabecalho'); ?>
    Criar série
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php_laravel\projeto_inicial\resources\views/series/create.blade.php ENDPATH**/ ?>