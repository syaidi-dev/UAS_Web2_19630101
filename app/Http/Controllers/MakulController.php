<?php

namespace App\Http\Controllers;

use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all(); 
        return view ('makul.index', compact('makul'));
    }
    public function create()
    {
        return view('makul.makul-create');
    }
    public function store(Request $request)
    {
        makul::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('makul');
    }
    public function edit($id)
    {
        $makul = makul::find($id);
        return view('makul.makul-edit', compact('makul'));
    }
    public function update(Request $request, $id)
    {
        $makul=makul::find($id);
        $makul->update($request->all());
        alert()->success('Sukses','Data berhasil diupdate.');
        return redirect()->route('makul');
    }
    public function destroy($id)
    {
        $makul=makul::find($id);
        $makul->delete();
        alert()->success('Sukses','Data berhasil dihapus.');
        return redirect()->route('makul');
    }
}
