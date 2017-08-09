<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Edit <?php echo e($Mahasiswa->nama); ?></h1>
        <!-- jika terjadi error, akan menampilkan pesan -->
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <?php echo Form::model($Mahasiswa, ['route' => ['mahasiswa.update', $Mahasiswa->nim], 'method' => 'PUT']); ?>

        <div class="form-group">
            <?php echo Form::label('nim', 'NIM'); ?>

            <?php echo Form::text('nim', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('nama', 'Nama Lengkap'); ?>

            <?php echo Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('jurusan', 'Jurusan'); ?>

            <?php echo Form::text('jurusan', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('telepon', 'Telepon'); ?>

            <?php echo Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('alamat', 'Alamat'); ?>

            <?php echo Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']); ?>

        </div>
        <?php echo Form::submit('Edit Data', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>