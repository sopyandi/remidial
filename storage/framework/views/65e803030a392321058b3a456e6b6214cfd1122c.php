<?php $__env->startSection('container'); ?>
    <form action="/" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="objek"><input type="submit" value="CARI">
    </form>
    <a href="/create" style="margin-left:-400px;"><button id="create">Create ++</button></a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->kelas); ?></td>
            <td><img src="storage/<?php echo e($data->foto); ?>" alt=""></td>
            <td>
                <a href=""><button>update</button></a>
                <a href="/delete-member/<?php echo e($data->id); ?>"><button>delete</button></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<style>
    img{
        border-radius:10px;
        width:100px;
        height:50px;
    }
</style>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/member/tampil-data.blade.php ENDPATH**/ ?>