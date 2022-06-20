<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanusr(Request $request){
        $user = User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => md5($request->password)
        ]);
        return redirect('/user')->with('alertcreate', 'Data Berhasil disimpan');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        $user = User::where('email', $request->email)
                  ->where('password',md5($request->password))
                  ->first();
        if ($user){
            Auth::login($user);
            return redirect('/maha');
        }
        else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('flash', 'Anda telah logout');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertdelete', 'Data berhasil dihapus');
    }

    public function ubahuser($id)
    {
        $user = User::find($id);
        return view('ubahuser', ['user' => $user]);
    }

    public function updateuser($id, Request $request){
        $user = User::find($id);
        $user->nik_user = $request->nik_user;
        $user->nama_user = $request->nama_user;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->save();
        return redirect('/user')->with('alertedit', 'Data berhasil diubah');
    }
}