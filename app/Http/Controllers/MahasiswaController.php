<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); 
        return view ('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        return view('mahasiswa.mahasiswa-create');
    }
    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.mahasiswa-edit', compact('mahasiswa'));
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
}
