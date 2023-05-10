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
            <h6 class="mb-0">Data Kriteria</h6>
        </div>
        <div bg-secondary text-right rounded p-4">

            <a href="{{route('kriteria.create')}}" class="btn btn-sm"><i class="fas fa-plus-circle fa-2x"></i></a>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Kode Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Bobot</th>
                    <th scope="col">Atribut</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kriteria as $kriterias)
                <tr>
                    <td>{{$kriterias->kode_kriteria}}</td>
                    <td>{{$kriterias->nama_kriteria}}</td>
                    <td>{{$kriterias->bobot}}</td>
                    <td>{{$kriterias->atribut}}</td>
                    <td>

                        <a href="{{route('kriteria.edit', [$kriterias->id])}}" class="btn btn-info btn-sm"> Edit
                        </a>

                        <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline"
                            action="{{route('kriteria.destroy', [$kriterias->id])}}" method="POST">
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
{{ $kriteria->links() }}
</div>

@push('script')

<script>
    $(document).on('click','.delete',function(){
			let id = $(this).attr('data-id');
			let route = "{{route('kriteria.destroy',':id')}}"
			let data = route.replace(':id',id);
			$('#kriteria-delete').attr('action',data)
		});
</script>

@endpush


@endsection