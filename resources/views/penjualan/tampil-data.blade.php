@extends('layouts/main')
@section('container')
    <a href="/create-penjualan"><button>Tambah Data Penjualan</button></a>
    <br> <br>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Harga</th>
            <th>Jumlah Beli</th>
            <th>Sub Total</th>
            <th>Action</th>
        </tr>
        @foreach($models as $data)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$data->nmbarang }}</td>
            <td>{{$data->nmpembeli }}</td>
            <td>{{$data->harga }}</td>
            <td>{{$data->jumlah_beli }}</td>
            <td width="100px">Rp.{{$data->sub_total }}-,</td>
            <td>
                <a href="/edit-penjualan/{{$data->id}}"><button>update</button></a>
                <a href="/delete-penjualan/{{$data->id}}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    <table border="1">
    <tr>
        <td width="363px">Total :</td>
        <td width="100px"><p style="color:red;">Rp.{{$total}}-,</p> </td>
    </tr>
</table>
@endsection
<style>
    img{
        border-radius:10px;
        width:100px;
        height:50px;
    }
</style>
