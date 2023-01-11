<div class="link">

    <a href="/"><button id="{{Request::is('/') ? 'active' : ''}}{{Request::is('create') ? 'active' : ''}}">Member</button></a>
     <a href="/produk"><button id="{{Request::is('produk') ? 'active' : ''}}{{Request::is('create-produk') ? 'active' : ''}}">Produk</button></a>
    <a href=""><button>kategori</button></a>
    <button>Login</button>
</div>