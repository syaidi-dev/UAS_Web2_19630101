@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Matakuliah
                    <a href="{{ route('makul-create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Kode Makul</th>
                                <th>Nama Makul</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($makul as $makul)
                            <tr>
                                <td>{{$makul->id}}</td>
                                <td>{{$makul->kd_makul}}</td>
                                <td>{{$makul->nama_makul}}</td>
                                <td>{{$makul->sks}}</td>
                                <td>
                                    <a href="{{ route('makul.edit', $makul->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('makul.delete', $makul->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
