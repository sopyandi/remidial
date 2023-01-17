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
}
