<div class="link">

    <a href="/"><button id="<?php echo e(Request::is('/') ? 'active' : ''); ?><?php echo e(Request::is('create') ? 'active' : ''); ?>">Member</button></a>
     <a href="/produk"><button id="<?php echo e(Request::is('produk') ? 'active' : ''); ?><?php echo e(Request::is('create-produk') ? 'active' : ''); ?>">Produk</button></a>
    <a href="/kategori"><button id="<?php echo e(Request::is('kategori') ? 'active' : ''); ?><?php echo e(Request::is('create-kategori') ? 'active' : ''); ?>">kategori</button></a>
    <button>Logout</button>
</div>
<?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/partial/link.blade.php ENDPATH**/ ?>