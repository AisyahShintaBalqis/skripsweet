<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Jarak Relatif Positif dan Negatif</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">#</th>
                    <th scope="col" colspan="{{count($kriterias)}}">Kriteria</th>
                </tr>
                <tr>
                    <th>D+</th>
                    <th>D-</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posneg as $kopi => $item)
                <tr>
                    <td>{{$kopi}}</td>
                    <td>{{number_format($item->max,'4',',','.')}}</td>
                    <td>{{number_format($item->min,'4',',','.')}}</td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
<br>
</div>