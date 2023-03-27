
<?php $__env->startSection('container'); ?>
<form action="/create-penjualan" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<table>
    <tr>
        <td>Nama Barang</td>
        <td>: <input type="text" name="nmbarang" required></td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td>: <input type="text" name="nmpembeli" required></td>
    </tr>
    <tr>
        <td>harga</td>
        <td>: <input type="number" name="harga" required></td>
    </tr>
    <tr>
        <td>Jumlah Beli</td>
        <td>: <input type="number" name="jumlah_beli" required></td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="SIMPAN"></td>
    </tr>
</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\remedial_0051044626\resources\views/penjualan/create.blade.php ENDPATH**/ ?>