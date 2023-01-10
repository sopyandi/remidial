@extends('layouts/main')
@section('container')
    <form action="/" method="POST">
    @csrf
    <input type="text" name="objek"><input type="submit" value="CARI">
    </form>
    <a href="/create" style="margin-left:-400px;"><button id="create">Create ++</button></a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        @foreach($models as $data)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$data->nama }}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->kelas }}</td>
            <td><img src="storage/{{$data->foto}}" alt=""></td>
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