<?php $__env->startSection('container'); ?>
<form action="/create-kategori" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<table>
    <tr>
        <td>Kode Kategori</td>
        <td>: <input type="text" name="kd_kategori"></td>
    </tr>
    <tr>
        <td>Nama Kategori</td>
        <td>: <input type="text" name="nama_kategori"></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>: <input type="file" name="foto"></td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="INPUT"></td>
    </tr>
</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/kategori/create.blade.php ENDPATH**/ ?>