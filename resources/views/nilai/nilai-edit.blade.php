@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="panel-heading">
                <h4>Edit Data Nilai</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('nilai.update', $nilai->id)}}" method="post" class="form-item">
                     @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-3">
                        <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                        <option value ="" disable selected >--Pilih Nama Mahasiswa--</option>
                           @foreach($mahasiswa as $mhs)
                            <option value="{{$mhs->id}}" {{$nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}>{{$mhs->user->name}}</option>    
                            @endforeach
                        </select>
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="makul" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                        <div class="col-sm-3">
                        <select class="form-control" name="makul_id" id="makul_id">
                        <option value ="" disable selected >--Pilih Matakuliah--</option>
                            @foreach($makul as $mk)
                            <option value="{{$mk->id}}" {{$nilai->makul_id == $mk->id ? 'selected' : '' }}>{{$mk->nama_makul}}</option>    
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                        <div class="col-sm-2">
                        <input type="number" name="nilai" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}" class="form-control" placeholder="Masukkan Nilai Mahasiswa">
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