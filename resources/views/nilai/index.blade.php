@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <a href="{{ route('nilai-create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>NPM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no =1;
                            @endphp

                            @foreach ($nilai as $nilai)

                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$nilai->mahasiswa->npm}}</td>
                                <td>{{$nilai->mahasiswa->user->name}}</td>
                                <td>{{$nilai->makul->nama_makul}}</td>
                                <td>{{$nilai->makul->sks}}</td>
                                <td>{{$nilai->nilai}}</td>
                                <td>
                                    <a href="{{ route('nilai.edit', $nilai->mahasiswa_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('nilai.delete', $nilai->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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
