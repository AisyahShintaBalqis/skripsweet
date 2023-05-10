@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Edit Data Kopi</h6>
        </div>

        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('kopi.update', [$kopi->id])}}"
                method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <label>Nama Kopi</label> <br>
                <input type="text" class="form-control" value="{{$kopi->nama_kopi}}" name="nama_kopi">

                <input type="hidden" value="PUT" name="_method">
                <label>Asal Kopi</label> <br>
                <input type="text" class="form-control" value="{{$kopi->asal_kopi}}" name="asal_kopi">

                {{-- <input type="hidden" value="PUT" name="_method">
                <label>Deskripsi</label> <br>
                <input type="text" class="form-control" value="{!!$kopi->deskripsi!!}" name="deskripsi"> --}}

                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="editor"
                    rows="10">{{old('deskripsi') ? old('deskripsi') : $kopi->deskripsi}}</textarea>


                <label>Foto</label><br>
                @if($kopi->foto)
                <span>Current image</span><br>
                <img src="{{asset('storage/'. $kopi->foto)}}" width="120px">

                <br><br>
                @endif
                <input type="file" class="form-control" name="foto">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah
                    gambar</small>

                <br>

                <input type="submit" class="btn btn-primary" value="Update">
        </div>



    </div>
</div>

@endsection

@section('Ck-Editor')
<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
	.create( document.querySelector( '#editor' ) )
	.catch( error => {
		console.error( error );
	} );
</script>
@endsection