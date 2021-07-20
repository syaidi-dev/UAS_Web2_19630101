@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="panel-heading">
                <h4>Tambah Data Nilai</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('simpan.nilai')}}" method="post">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-3">
                        <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                        <option value ="" disable selected >--Pilih Nama Mahasiswa--</option>
                           @foreach ($user as $u)
                              <option value="{{ $u->id }}">{{ $u->name }}</option>
                           @endforeach
                        </select>
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="makul" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                        <div class="col-sm-3">
                        <select class="form-control" name="makul_id" id="makul_id">
                        <option value ="" disable selected >--Pilih Matakuliah--</option>
                            @foreach ($makul as $mk)
                              <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                        <div class="col-sm-2">
                            <input type="text" name="nilai" id="nilai" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-success">SIMPAN</button>{!!csrf_field()!!}
                                <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection