<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
   public function read(){
    return view('member/tampil-data',[
        'title'=>'Tampildata',
        'models'=> Member::all()
    ]);
}

    public function cari(Request $data){
    // return $data;
    $title = $data->objek;
    return view('member/tampil-data',[
        'title'=> $title,
        'models'=>Member::where('nama',$title)->get()

    ]);
}
    public function create(){
        return view('member/create',[
            'title'=>'Create'
        ]);
    }
    public function input(Request $data){
        if($data->file('foto')){
            $foto = $data->file('foto')->store('foto-member');
        }else{
            $foto='';
        }
        Member::create([
            'nama'=>$data->nama,
            'email'=>$data->email,
            'kelas'=>$data->kelas,
            'foto'=>$foto
        ]);
        return redirect('/');
    }
    public function delete($id){
    $hapus = Member::where('id',$id)->delete();
    return redirect('/');

    }
}
