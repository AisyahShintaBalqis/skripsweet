@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Edit Data Parameter</h6>
        </div>

        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3"
                action="{{route('parameter.update', [$parameter->id])}}" method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <label>Kode Parameter</label> <br>
                <input type="text" class="form-control" value="{{$parameter->kode_parameter}}" name="kode_parameter">

                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="nama_kriteria" value="{{$parameter->nama_kriteria}}"
                        id="kriteria_id">
                        <option label="Pilih Kriteria..."></option>

                        @foreach ($kriteria as $item)

                        <option @if ($parameter->kriteria_id == $item->id) selected @endif

                            value="{{$item->id}}">{{$item->nama_kriteria}}</option>

                        @endforeach
                    </select>
                </div>

                <input type="hidden" value="PUT" name="_method">
                <label>Nama Parameter</label> <br>
                <input type="text" class="form-control" value="{{$parameter->nama_parameter}}" name="nama_parameter">

                <input type="hidden" value="PUT" name="_method">
                <label>Min</label> <br>
                <input type="text" class="form-control" value="{{$parameter->min}}" name="min">

                <input type="hidden" value="PUT" name="_method">
                <label>Max</label> <br>
                <input type="text" class="form-control" value="{{$parameter->max}}" name="max">

                <br>

                <input type="submit" class="btn btn-primary" value="Update">
        </div>



    </div>
</div>

@endsection