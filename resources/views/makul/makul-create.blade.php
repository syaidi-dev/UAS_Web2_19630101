@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="panel-heading">
                <h4>Tambah Data Matakuliah</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('simpan.makul')}}" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Kode Makul</label>
                        <div class="col-sm-3">
                            <input type="text" name="kd_makul" id="kd_makul" class="form-control" required="require">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_makul" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_makul" id="nama_makul" class="form-control">
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-2">
                            <input type="text" name="sks" id="sks" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-success">SIMPAN</button>{!!csrf_field()!!}
                                <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection