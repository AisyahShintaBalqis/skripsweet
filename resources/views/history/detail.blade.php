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
            <h6 class="mb-0">Ranking</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Peringkat</th>
                    <th scope="col">Tanggal Pengujian</th>
                    <th scope="col">Nama Kopi</th>
                    <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $index => $history)
                <tr>
                    <td>
                        {{$index+1}}
                    </td>
                    <td>
                        {{$history->created_at}}
                    </td>
                    <td>
                        {{$history->nama_kopi}}
                    </td>
                    <td>
                        {{$history->nilai}}
                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
        </table>
    </div>
<br>
</div>

@endsection