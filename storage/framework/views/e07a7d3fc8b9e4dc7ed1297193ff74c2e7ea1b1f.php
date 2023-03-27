
<?php $__env->startSection('container'); ?>
<form action="/edit-penjualan" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="hidden" name="total_sebelumnya" value="<?php echo e($penjualan->sub_total); ?>">
<table>
    <tr>
        <td>Nama Barang</td>
        <td>: <input type="text" name="nmbarang" placeholder="<?php echo e($penjualan->nmbarang); ?>" required></td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td>: <input type="text" name="nmpembeli" placeholder="<?php echo e($penjualan->nmpembeli); ?>" required></td>
    </tr>
    <tr>
        <td>harga</td>
        <td>: <input type="number" name="harga" placeholder="<?php echo e($penjualan->harga); ?>" required></td>
    </tr>
    <tr>
        <td>Jumlah Beli</td>
        <td>: <input type="number" name="jumlah_beli" placeholder="<?php echo e($penjualan->jumlah_beli); ?>" required></td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="UPDATE"></td>
    </tr>
</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\remedial_0051044626\resources\views/penjualan/edit.blade.php ENDPATH**/ ?>