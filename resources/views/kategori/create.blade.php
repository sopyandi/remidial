@extends('layouts/main')
@section('container')
<form action="/create-kategori" method="POST" enctype="multipart/form-data">
@csrf
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
@endsection
