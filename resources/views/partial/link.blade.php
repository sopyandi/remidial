<div class="link">
    <a href="/member"><button id="{{Request::is('member') ? 'active' : ''}}{{Request::is('create') ? 'active' : ''}}">Member</button></a>
     <a href="/produk"><button id="{{Request::is('produk') ? 'active' : ''}}{{Request::is('create-produk') ? 'active' : ''}}">Produk</button></a>
    <a href="/kategori"><button id="{{Request::is('kategori') ? 'active' : ''}}{{Request::is('create-kategori') ? 'active' : ''}}">kategori</button></a>
</div>
