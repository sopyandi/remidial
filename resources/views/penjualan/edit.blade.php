@extends('layouts/main')
@section('container')
<form action="/edit-penjualan" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$penjualan->id}}">
<table>
    <tr>
        <td>Nama Barang</td>
        <td>: <input type="text" name="nmbarang" value="{{$penjualan->nmbarang}}" required></td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td>: <input type="text" name="nmpembeli" value="{{$penjualan->nmpembeli}}" required></td>
    </tr>
    <tr>
        <td>harga</td>
        <td>: <input type="number" name="harga" value="{{$penjualan->harga}}" required></td>
    </tr>
    <tr>
        <td>Jumlah Beli</td>
        <td>: <input type="number" name="jumlah_beli" value="{{$penjualan->jumlah_beli}}" required></td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="UPDATE"></td>
    </tr>
</table>
</form>
@endsection