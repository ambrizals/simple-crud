<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Arsip Mahasiswa</h1>
        <br/>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jurusan</td>
                    <td>Alamat</td>
                    <td>Telepon</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $Mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->nim); ?></td>
                    <td><?php echo e($value->nama); ?></td>
                    <td><?php echo e($value->jurusan); ?></td>
                    <td><?php echo e($value->alamat); ?></td>
                    <td><?php echo e($value->telepon); ?></td>
                    <td>
                        <?php echo Form::open(['url' => 'mahasiswa/' . $value->nim . '/restore', 'class' => 'pull-left']); ?>

                        <?php echo Form::hidden('_method', 'DELETE'); ?>

                        <?php echo Form::submit('Kembalikan Data', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </td>         
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>