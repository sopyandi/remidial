@extends('layouts/main')
@section('container')
<form action="/create" method="POST">
@csrf
<table>
    <tr>
        <td>Nama :</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>email :</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>kelas :</td>
        <td><input type="text" name="kelas"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="INPUT"></td>
    </tr>
</table>
</form>
@endsection