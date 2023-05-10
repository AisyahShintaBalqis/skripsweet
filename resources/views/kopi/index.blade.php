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

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Kopi</h6>
        </div>
        <div bg-secondary text-right rounded p-4">

            <a href="{{route('kopi.create')}}" class="btn btn-sm"><i class="fas fa-plus-circle fa-2x"></i></a>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Nama Kopi</th>
                    <th scope="col">Asal Kopi</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kopi as $kopis)
                <tr>
                    <td>{{$kopis->nama_kopi}}</td>
                    <td>{{$kopis->asal_kopi}}</td>
                    <td>{!!$kopis->deskripsi!!}</td>
                    <td>
                        @if($kopis->foto)
                        <img src="{{asset('storage/' . $kopis->foto)}}" width="48px" />
                        @else
                        No image
                        @endif
                    </td>
                    <td>

                        <a href="{{route('kopi.edit', [$kopis->id])}}" class="btn btn-info btn-sm"> Edit
                        </a>

                        <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline"
                            action="{{route('kopi.destroy', [$kopis->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>


    </div>
    </td>
    </tr>
    @endforeach

    </tbody>
    </table>

</div>
<br>
{{ $kopi->links() }}
</div>
@endsection