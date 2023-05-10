@extends('backend.master')
@section('content')

@if(session('status'))
<script>
    Swal.fire({

		icon: 'success',
		title: 'Sukses',
		text : "{{session('status')}}",

	});
</script>

@endif

<div>
    @include('hasil.matriks_asli')
    @include('hasil.matriks_normalisasi')
    @include('hasil.matriks_normalisasi_terbobot')
    @include('hasil.matriks_max_min')
    @include('hasil.matriks_jarak_posneg')
    @include('hasil.perankingan')

</div>





@endsection