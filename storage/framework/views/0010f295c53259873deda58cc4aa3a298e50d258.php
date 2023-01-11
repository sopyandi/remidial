
<?php $__env->startSection('container'); ?>
    <form action="/" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="objek"><input type="submit" value="CARI">
    </form>
    <br>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
        </tr>
        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->kelas); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/tampil-data.blade.php ENDPATH**/ ?>