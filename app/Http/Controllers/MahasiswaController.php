<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user'])->get(); 
        return view ('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        $user = User::all();
        return view('mahasiswa.mahasiswa-create', compact('user'));
    }
    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.mahasiswa-edit', compact('mahasiswa','user'));
    }
    public function update(Request $request, $id)
    {
        $mahasiswa=mahasiswa::find($id);
        $mahasiswa->update($request->all());
        alert()->success('Sukses','Data berhasil diupdate.');
        return redirect()->route('mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa=mahasiswa::find($id);
        $mahasiswa->delete();
        alert()->success('Sukses','Data berhasil dihapus.');
        return redirect()->route('mahasiswa');
    }
    public function nilai($id)
    {
        $mahasiswa = Mahasiswa::all();
        return view('nilai.nilai-create', ['mahasiswa'->$mahasiswa ]);
    }
}
