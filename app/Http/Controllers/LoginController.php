<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
public function login(){
return view('login');
}
public function masuk (Request $data)
{
    //    return $data->all();
    $datalogin = $data->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    //    $datalogin['password'] = bcrypt($datalogin['password']);
    if (Auth::attempt($datalogin)) {
        $data->session()->regenerate();
        return redirect()->intended('/member');
    }
    return back()->with('filedlogin', 'Maap Anda Gagal Login Mungkin Ada Kesalahan Dalam Pengetikan Atau Anda Belum Terdaftar!!');
}
public function keluar(Request $data)
{
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
}
}
