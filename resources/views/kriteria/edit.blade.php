@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Edit Data Kriteria</h6>
        </div>

        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3"
                action="{{route('kriteria.update',$kriteria->id)}}" method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <label>Kode Kriteria</label> <br>
                <input type="text" class="form-control" value="{{$kriteria->kode_kriteria}}" name="kode_kriteria">

                <input type="hidden" value="PUT" name="_method">
                <label>Nama Kriteria</label> <br>
                <input type="text" class="form-control" value="{{$kriteria->nama_kriteria}}" name="nama_kriteria">

                <input type="hidden" value="PUT" name="_method">
                <label>Bobot</label> <br>
                <input type="text" class="form-control" value="{{$kriteria->bobot}}" name="bobot">

                <input type="hidden" value="PUT" name="_method">
                <label>Atribut</label> <br>
                <input type="text" class="form-control" value="{{$kriteria->atribut}}" name="atribut">

                <br>

                <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </div>
</div>

@endsection