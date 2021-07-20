<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\User;
use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class NilaiController extends Controller
{
    public function index()
    {
        //$user = User::with(['mahasiswa'])->get();;
        $nilai = nilai::with(['mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }
    public function create()
    {   
        $user = User::all();
        $makul = Makul::all();
        return view('nilai.nilai-create', compact('user', 'makul'));
    }
    public function store(Request $request)
    {

        nilai::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('nilai');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.nilai-edit', compact('mahasiswa', 'makul', 'nilai'));
    }
    public function update(Request $request, $id)
    {
        $nilai=nilai::find($id);
        $nilai->update($request->all());
        alert()->success('Sukses','Data berhasil diupdate.');
        return redirect()->route('nilai');
    }
    public function destroy($id)
    {
        $nilai=nilai::find($id);
        $nilai->delete();
        alert()->success('Sukses','Data berhasil dihapus.');
        return redirect()->route('nilai');
    }
}
