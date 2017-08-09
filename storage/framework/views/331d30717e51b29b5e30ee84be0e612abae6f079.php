<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Tampilkan Data Pegawai</h1>
        <div class="jumbotron">
            <h2><?php echo e($Mahasiswa->nama); ?></h2>
            <ul>
                <li>NIM : <?php echo e($Mahasiswa->nim); ?></li>
                <li>Jurusan : <?php echo e($Mahasiswa->jurusan); ?></li>
                <li>Alamat : <?php echo e($Mahasiswa->alamat); ?></li>
                <li>Telepon : <?php echo e($Mahasiswa->telepon); ?></li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>