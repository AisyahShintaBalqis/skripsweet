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
            <h6 class="mb-0">Data Parameter</h6>
        </div>
        <div bg-secondary text-right rounded p-4">

            <a href="{{route('parameter.create')}}" class="btn btn-sm"><i class="fas fa-plus-circle fa-2x"></i></a>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Kode Parameter</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Nama Parameter</th>
                    <th scope="col">Min</th>
                    <th scope="col">Max</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parameters as $key=> $item)
                <tr>
                    <td>{{$item->kode_parameter}}</td>
                    <td>{{$item->kriteria->nama_kriteria}}</td>
                    <td>{{$item->nama_parameter}}</td>
                    <td>{{$item->min}}</td>
                    <td>{{$item->max}}</td>
                    <td>

                        <a href="{{route('parameter.edit', [$item->id])}}" class="btn btn-info btn-sm"> Edit
                        </a>

                        <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline"
                            action="{{route('parameter.destroy', [$item->id])}}" method="POST">
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
{{ $parameters->links() }}
</div>
@endsection