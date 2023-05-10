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
            <h6 class="mb-0">Data Pengujian</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Tanggal Pengujian</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                <tr>
                    <td>
                        {{$history->created_at}}
                    </td>
                    <td>
                    <a href="{{route('history.show', [$history->id_pengujian])}}" class="btn btn-warning"> Detail </a>
                    </td>
                </tr>
                
                @endforeach

            </tbody>
        </table>

</div>
<br>

</div>
@endsection