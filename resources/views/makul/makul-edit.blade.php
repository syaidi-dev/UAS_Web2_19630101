@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="panel-heading">
                <h4>Edit Data Matakuliah</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('makul.update', $makul->id)}}" method="post">
                @csrf 
                
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Kode Matakuliah</label>
                        <div class="col-sm-3">
                            <input type="text" name="kd_makul" id="kd_makul" class="form-control" value="{{ is_null($makul) ?'' : $makul->kd_makul}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_makul" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_makul" id="nama_makul" class="form-control" value="{{ is_null($makul) ?'' : $makul->nama_makul}}">
                        </div>
                    </div>      
                    <div class="form-group row">
                        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-2">
                            <input type="text" name="sks" id="sks" class="form-control" value="{{ is_null($makul) ?'' : $makul->sks}}">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-success">UPDATE</button>{!!csrf_field()!!}
                                <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection