@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Input Data Parameter</h6>
        </div>
        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('parameter.store')}}"
                method="POST">
                @csrf
                <label for="kode_parameter" class="form-label">Kode Parameter</label>
                <input name="kode_parameter" type="text"
                    class="form-control @error('kode_parameter') is-invalid @enderror" id="kode_parameter"
                    placeholder="Input Kode Parameter">

                @error('kode_parameter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control @error('kriteria_id') is-invalid @enderror" name="kriteria_id">
                        <option value="">Pilih Kriteria...</option>

                        @foreach ($kriterias as $item)

                        <option value="{{$item->id}}">{{$item->nama_kriteria}}</option>

                        @endforeach

                    </select>
                    @error('kriteria_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <label for="nama_parameter" class="form-label">Nama Parameter</label>
                <input name="nama_parameter" type="text"
                    class="form-control @error('nama_parameter') is-invalid @enderror" id="nama_parameter"
                    placeholder=" Input Parameter">

                @error('nama_parameter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="min" class="form-label">Min</label>
                <input name="min" type="text" class="form-control @error('min') is-invalid @enderror" id="min"
                    placeholder=" Input Nilai Minimal">

                @error('min')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="max" class="form-label">Max</label>
                <input name="max" type="text" class="form-control @error('max') is-invalid @enderror" id="max"
                    placeholder=" Input Nilai Maksimal">

                @error('max')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror




        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="Save" />

    </div>
</div>

@endsection