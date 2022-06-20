<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa'=> $mahasiswa]);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orwhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa'=> $mahasiswa]);
    }

    public function form()
    {
       return view('formmhs');
    }

    public function simpan(Request $request)
    {
      $bidangminat = implode(",", $request->bidangminat);
      Mahasiswa::create([
          'nim' => $request->nim,
          'nama' => $request->nama,
          'gender'=> $request->gender,
          'jurusan'=> $request->jurusan,
          'bidangminat'=>$bidangminat
      ]);
      return redirect('/maha')->with('alertsimpn', 'Data Mahasiswa Telah Disimpan');
    }

    Public function ubah($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('ubah', ['mahasiswa'=> $mahasiswa]);
    }

    public function updatemhs($id, Request $request)
    {
        
        $bidangminat = implode(",", $request->bidangminat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidangminat = $bidangminat;
        $mahasiswa->save();
        return redirect('/maha')->with('alertubh', 'Data Mahasiswa Telah Diubah');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('/maha')->with('alerthps', 'Data Mahasiswa Telah Dihapus');
    }

}
