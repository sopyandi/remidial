<div class="head">
<h5>Nama : <?php echo e(Auth()->user()->name); ?></h5>
<h1>UJIKOM SMK YPC</h1>
<form action="/logout">
    <?php echo csrf_field(); ?>
    <button type="submit">Logout</button>
</form>
</div>
<?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/partial/head.blade.php ENDPATH**/ ?>