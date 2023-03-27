@extends('layouts/main')
@section('container')
<form action="/edit-penjualan" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="total_sebelumnya" value="{{$penjualan->sub_total}}">
<table>
    <tr>
        <td>Nama Barang</td>
        <td>: <input type="text" name="nmbarang" placeholder="{{$penjualan->nmbarang}}" required></td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td>: <input type="text" name="nmpembeli" placeholder="{{$penjualan->nmpembeli}}" required></td>
    </tr>
    <tr>
        <td>harga</td>
        <td>: <input type="number" name="harga" placeholder="{{$penjualan->harga}}" required></td>
    </tr>
    <tr>
        <td>Jumlah Beli</td>
        <td>: <input type="number" name="jumlah_beli" placeholder="{{$penjualan->jumlah_beli}}" required></td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;&nbsp;<input type="submit" value="UPDATE"></td>
    </tr>
</table>
</form>
@endsection