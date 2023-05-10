@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Input Data Nilai</h6>
        </div>
        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('nilai.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Kopi</label>
                    <select class="form-control @error('kopi_id') is-invalid @enderror" name="kopi_id">
                        <option value="">Pilih Kopi...</option>

                        @foreach ($kopis as $item)

                        <option value="{{$item->id}}">{{$item->nama_kopi}}</option>

                        @endforeach

                    </select>
                    @error('kopi_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

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


                <label for="jumlah_nilai" class="form-label">Jumlah Nilai</label>
                <input name="jumlah_nilai" type="text" class="form-control @error('jumlah_nilai') is-invalid @enderror"
                    id="min" placeholder="Input Jumlah Nilai">

                @error('jumlah_nilai')
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