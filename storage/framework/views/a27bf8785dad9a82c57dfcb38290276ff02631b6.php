<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Tampilkan Data Pegawai</h1>
        <div class="jumbotron text-center">
            <h2><?php echo e($pegawai->Nama); ?></h2>
            <strong>Email :</strong> <?php echo e($pegawai->Email); ?>

            <strong>Level :</strong> <?php echo e($pegawai->level); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>