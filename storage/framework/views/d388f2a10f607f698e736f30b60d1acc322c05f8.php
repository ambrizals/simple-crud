<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Tambah Mahasiswa</h1>
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
        <?php echo Form::open(['url'=>'mahasiswa']); ?>

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
        <?php echo Form::submit('Tambah Mahasiswa', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>