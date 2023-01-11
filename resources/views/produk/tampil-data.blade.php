@extends('layouts/main')
@section('container')
    <form action="/" method="POST">
    @csrf
    <input type="text" name="objek"><input type="submit" value="CARI">
    </form>
    <a href="/create-produk" style="margin-left:-400px;"><button id="create">Create ++</button></a>
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
        @foreach($models as $data)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$data->kd_produk }}</td>
            <td>{{$data->nama_produk}}</td>
            <td>Rp.{{$data->harga }}</td>
            <td>{{$data->deskripsi }}</td>
            <td><img src="storage/{{$data->gambar}}" alt=""></td>
            <td>{{$data->kd_kategori }}</td>
            <td>
                <a href=""><button>update</button></a>
                <a href="/delete?kd={{ $data->id }}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
<style>
    img{
        border-radius:10px;
        width:100px;
        height:50px;
    }
</style>