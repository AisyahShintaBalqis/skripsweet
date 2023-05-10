<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nilai Max dan Min</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">#</th>
                    <th scope="col" colspan="{{count($kriterias)}}">Kriteria</th>
                </tr>
                <tr>
                    @foreach($kriterias as $item)
                        <th>{{$item->kode_kriteria}}</th>
                    @endforeach()
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Max</td>
                    @foreach ($max_min as $item)
                    <td>{{number_format($item->max,'4',',','.')}}</td>
                    @endforeach()
                </tr>
                <tr>
                    <td>Min</td>
                    @foreach ($max_min as $item)
                    <td>{{number_format($item->min,'4',',','.')}}</td>
                    @endforeach()
                </tr>
            </tbody>
        </table>
    </div>
<br>
</div>