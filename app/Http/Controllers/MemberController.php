<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
   public function read(){
    return view('tampil-data',[
        'title'=>'Tampildata',
        'models'=> Member::all()
    ]);
}

    public function cari(Request $data){
    // return $data;
    $title = $data->objek;
    return view('tampil-data',[
        'title'=> $title,
        'models'=>Member::where('nama',$title)->get()

    ]);
}
}