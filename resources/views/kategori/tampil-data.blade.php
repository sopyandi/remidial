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
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
        @foreach($models as $data)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$data->kd_kategori }}</td>
            <td>{{$data->nama_kategori}}</td>
            <td><img src="storage/{{$data->gambar}}" alt=""></td>
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
