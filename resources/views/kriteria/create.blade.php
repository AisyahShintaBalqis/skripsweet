@extends('backend.master')
@section('content')


<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Input Data Kriteria</h6>
        </div>
        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('kriteria.store')}}"
                method="POST">
                @csrf
                <label for="kodekriteria" class="form-label">Kode Kriteria</label>
                <input name="kode_kriteria" type="text"
                    class="form-control @error('kode_kriteria') is-invalid @enderror" id="kode_kriteria"
                    placeholder="Input Kode Kriteria">

                @error('kode_kriteria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="namakriteria" class="form-label">Nama Kriteria</label>
                <input name="nama_kriteria" type="text"
                    class="form-control @error('nama_kriteria') is-invalid @enderror" id="nama_kriteria"
                    placeholder="Input Nama Kriteria">

                @error('nama_kriteria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="bobot" class="form-label">Bobot</label>
                <input name="bobot" type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot"
                    placeholder=" Input Bobot">

                @error('bobot')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="atribut">Atribut</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="atribut" value="Cost"
                            {{(old('atribut')=='Cost' ) ? 'checked' : '' }}>
                        <label class="form-check-label inline-block">Cost</label>
                    </div>  
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="atribut" value="Benefit"
                            {{(old('atribut')=='Benefit' ) ? 'checked' : '' }}>
                        <label class="form-check-label {{$errors->first('atribut') ? " is-invalid": ""
                            }}">Benefit</label>
                        <div class="invalid-feedback">
                            &emsp;{{$errors->first('atribut')}}
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="Save" />

    </div>
</div>

@endsection