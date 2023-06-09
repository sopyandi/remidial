
<?php $__env->startSection('container'); ?>
    <a href="/create-produk"><button id="create">Create ++</button></a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Gambar Produk</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->kd_produk); ?></td>
            <td><?php echo e($data->nama_produk); ?></td>
            <td>Rp.<?php echo e($data->harga); ?></td>
            <td><?php echo e($data->deskripsi); ?></td>
            <td><img src="storage/<?php echo e($data->gambar); ?>" alt=""></td>
            <td><?php echo e($data->kd_kategori); ?></td>
            <td>
                <a href=""><button>update</button></a>
                <a href="/delete-produk/<?php echo e($data->id); ?>"><button>delete</button></a>
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\remedial_0051044626\resources\views/produk/tampil-data.blade.php ENDPATH**/ ?>