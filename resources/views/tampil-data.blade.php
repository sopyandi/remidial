@extends('layouts/main')
@section('container')
    <form action="/" method="POST">
    @csrf
    <input type="text" name="objek"><input type="submit" value="CARI">
    </form>
    <br>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
        </tr>
        @foreach($models as $data)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$data->nama }}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->kelas }}</td>
        </tr>
        @endforeach
    </table>
@endsection