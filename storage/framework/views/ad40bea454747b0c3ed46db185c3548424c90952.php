<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Edit <?php echo e($pegawai->Nama); ?></h1>
        <!-- jika terjadi error, akan menampilkan pesan -->
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <?php echo Form::model($pegawai, ['route' => ['pegawai.update', $pegawai->ID], 'method' => 'PUT']); ?>

        <div class="form-group">
            <?php echo Form::label('nama', 'Nama'); ?>

            <?php echo Form::text('Nama', null, ['class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email', 'Email'); ?>

            <?php echo Form::email('Email', null, ['class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('level', 'Level'); ?>

            <?php echo Form::select('level', [' ' => 'Select a Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']); ?>

        </div>
        <?php echo Form::submit('Edit Data', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>