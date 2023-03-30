<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use App\Models\Total;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //TAMPILAN PENJUALAN
    public function read()
    {
      return view('penjualan/tampil-data',[
          'title'=>'Tampildata',
          'models'=>Penjualan::all(),
          'total'=> Penjualan::sum('sub_total')
      ]);
    }
    //TAMBAH DATA PENJUALAN
    public function create(){
      return view('penjualan/create',[
          'title'=>'create produk'
      ]);
    }
    public function input(Request $data){
      // return $data;
      $sub_total = $data->harga * $data->jumlah_beli;
        Penjualan::create([
            'nmbarang'=>$data->nmbarang,
            'nmpembeli'=>$data->nmpembeli,
            'harga'=>$data->harga,
            'jumlah_beli'=>$data->jumlah_beli,
            'sub_total'=>$sub_total,
        ]);
        return redirect('/');
    }
    //EDIT DATA PENJUALAN
    public function edit($id){
        $data = Penjualan::find($id);
        return view('penjualan.edit',[
            'title' => 'edit',
            'penjualan' => $data
        ]);
    }
    public function update(Request $data){
        // return $data;
    $sub_total = $data->harga * $data->jumlah_beli;
    Penjualan::where('id',$data->id)->update([
        'nmbarang'=>$data->nmbarang,
        'nmpembeli'=>$data->nmpembeli,
        'harga'=>$data->harga,
        'jumlah_beli'=>$data->jumlah_beli,
        'sub_total'=>$sub_total
    ]);
    return redirect('/');
    }
    //HAPUS DATA PENJUALAN
    public function delete($id){
      $hapus = Penjualan::where('id',$id)->delete();
      return redirect('/');
  }
}
