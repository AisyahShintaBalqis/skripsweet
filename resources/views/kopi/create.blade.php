@extends('backend.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Input Data Kopi</h6>
        </div>
        <div class="cold-md-8">
            <form enctype="multipart/form-data" class=" shadow-sm p-3" action="{{route('kopi.store')}}" method="POST">
                @csrf
                <label for="nama_kopi" class="form-label">Nama Kopi</label>
                <input name="nama_kopi" type="text" class="form-control @error('nama_kopi') is-invalid @enderror"
                    id="nama_kopi" placeholder="Input Nama Kopi">

                @error('nama_kopi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <label for="asal_kopi" class="form-label">Asal Kopi</label>
                <input name="asal_kopi" type="text" class="form-control @error('asal_kopi') is-invalid @enderror"
                    id="asal_kopi" placeholder="Input Asal Kopi">

                @error('asal_kopi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

                <br>
                
                <textarea name="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="editor" rows="3" >{{old('deskripsi')}}</textarea>
                

                @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>

                @enderror

               

                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" />

                @error('foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="Save" />

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