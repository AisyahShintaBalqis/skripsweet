@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Edit Data Nilai</h6>
        </div>

        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('nilai.update', [$nilai->id])}}"
                method="POST">
                @csrf

                <div class="form-group">
                    <label>Kopi</label>
                    <select class="form-control" name="nama_kopi" value="{{$nilai->nama_kopi}}" id="kopi_id">
                        <option label="Pilih Kopi..."></option>

                        @foreach ($kopi as $item)

                        <option @if ($nilai->kopi_id == $item->id) selected @endif

                            value="{{$item->id}}">{{$item->nama_kopi}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="nama_kriteria" value="{{$nilai->nama_kriteria}}"
                        id="kriteria_id">
                        <option label="Pilih Kriteria..."></option>

                        @foreach ($kriterias as $item)

                        <option @if ($nilai->kriteria_id == $item->id) selected @endif

                            value="{{$item->id}}">{{$item->nama_kriteria}}</option>

                        @endforeach
                    </select>
                </div>

                <input type="hidden" value="PUT" name="_method">
                <label>Jumlah Nilai</label> <br>
                <input type="text" class="form-control" value="{{$nilai->jumlah_nilai}}" name="jumlah_nilai">

                <br>

                <input type="submit" class="btn btn-primary" value="Update">
        </div>



    </div>
</div>

@endsection