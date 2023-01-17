<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
  public function read()
  {
    return view('produk/tampil-data',[
        'title'=>'Tampildata',
        'models'=>Produk::all()
    ]);
  }
  public function create(){
    return view('produk/create',[
        'title'=>'create produk'
    ]);
  }
  public function input(Request $data){
    // return $data;
        if($data->file('gambar')){
          $gambar = $data->file('gambar')->store('foto-produk');
      }else{
          $gambar='';
      }
      Produk::create([
          'kd_produk'=>$data->kd_produk,
          'nama_produk'=>$data->nama_produk,
          'harga'=>$data->harga,
          'deskripsi'=>$data->deskripsi,
          'gambar'=>$gambar,
          'kd_kategori'=>$data->kategori
      ]);
      return redirect('/produk');
  }
  public function delete($id){
    $hapus = Produk::where('id',$id)->delete();
    return redirect('/produk');
}
}
