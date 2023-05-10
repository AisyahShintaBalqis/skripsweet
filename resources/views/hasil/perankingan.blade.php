<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Ranking</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Ranking</th>
                    <th scope="col">Kopi</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($sortedRanks as $ranking)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$ranking->kopi}}</td>
                    <td>{{number_format($ranking->nilai,'2',',','.')}}</td>
                    <td>{{
                        $ranking->nilai >= 0.30 ? 'Layak' : 'Tidak Layak'
                        }}</td>
                </tr>
                @endforeach()
            </tbody>
        </table>
        <a href="{{route('simpan_history.index')}}" class="btn btn-warning"> Simpan Ranking </a>
    </div>
    <br>
</div>