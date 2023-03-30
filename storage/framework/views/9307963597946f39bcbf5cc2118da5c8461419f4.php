
<?php $__env->startSection('container'); ?>
    <a href="/create-penjualan"><button>Tambah Data Penjualan</button></a>
    <br> <br>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Harga</th>
            <th>Jumlah Beli</th>
            <th>Sub Total</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->nmbarang); ?></td>
            <td><?php echo e($data->nmpembeli); ?></td>
            <td><?php echo e($data->harga); ?></td>
            <td><?php echo e($data->jumlah_beli); ?></td>
            <td width="100px">Rp.<?php echo e($data->sub_total); ?>-,</td>
            <td>
                <a href="/edit-penjualan/<?php echo e($data->id); ?>"><button>update</button></a>
                <a href="/delete-penjualan/<?php echo e($data->id); ?>"><button>delete</button></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <table border="1">
    <tr>
        <td width="363px">Total :</td>
        <td width="100px"><p style="color:red;">Rp.<?php echo e($total); ?>-,</p> </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>
<style>
    img{
        border-radius:10px;
        width:100px;
        height:50px;
    }
</style>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\remedial_0051044626\resources\views/penjualan/tampil-data.blade.php ENDPATH**/ ?>