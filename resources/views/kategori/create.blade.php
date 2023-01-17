@extends('layouts/main')
@section('container')
<form action="/create-produk" method="POST" enctype="multipart/form-data">
@csrf
<table>
    <tr>
        <td>kode produk</td>
        <td>: <input type="text" name="kd_produk"></td>
    </tr>
    <tr>
        <td>nama produk</td>
        <td>: <input type="text" name="nama_produk"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td>: <input type="number" name="harga"></td>
    </tr>
    <tr>
        <td>deskripsi</td>
        <td>: 
            <textarea name="deskripsi" cols="30" rows="7"></textarea>
        </td>
    </tr>
    <tr>
        <td>foto produk</td>
        <td>: <input type="file" name="gambar"></td>
    </tr>
    <tr>
        <td>kategori</td>
        <td>:
            <select name="kategori" id="">
                <option value="k10">Alat Tulis</option>
                <option value="k11">Makanan</option>
                <option value="k12">Electronik</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="INPUT"></td>
    </tr>
</table>
</form>
@endsection