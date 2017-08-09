<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Daftar Pegawai</h1>
        <!-- digunakan untuk menampilkan pesan -->
        <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->ID); ?></td>
                    <td><?php echo e($value->Nama); ?></td>
                    <td><?php echo e($value->Email); ?></td>
                    <td><?php echo e($value->level); ?></td>
                    <!-- untuk menambahkan tombol tampil, edit, dan hapus -->
                    <td>
                        <a class="btn btn-small btn-success" href="<?php echo e(URL('pegawai/' . $value->ID)); ?>">Tampilkan Data</a>
                        <a class="btn btn-small btn-warning" href="<?php echo e(URL('pegawai/' . $value->ID . '/edit')); ?>">Ubah Data</a>
                        <?php echo Form::open(['url' => 'pegawai/' . $value->ID, 'class' => 'pull-right']); ?>

                        <?php echo Form::hidden('_method', 'DELETE'); ?>

                        <?php echo Form::submit('Hapus Data', ['class' => 'btn btn-danger']); ?>

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