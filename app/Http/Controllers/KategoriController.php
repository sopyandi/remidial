<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function read(){
        return view('kategori/tampil-data',[
            'title'=>'Tampildata',
            'models'=> Kategori::all()
        ]);
    }
    public function create(){
        return view('kategori/create',[
            'title'=>'Create'
        ]);
    }
    public function input(Request $data){
        if($data->file('foto')){
            $foto = $data->file('foto')->store('foto-kategori');
        }else{
            $foto='';
        }
        Kategori::create([
            'kd_kategori'=>$data->kd_kategori,
            'nama_kategori'=>$data->nama_kategori,
            'foto'=>$foto
        ]);
        return redirect('/kategori');
    }
    public function delete($id){
        $hapus = Kategori::where('id',$id)->delete();
        return redirect('/kategori');
    }
}
