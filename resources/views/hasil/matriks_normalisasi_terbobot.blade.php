<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Matriks Ternormalisasi Terbobot</h6>
        </div>
        <table class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">Kopi</th>
                    <th scope="col" colspan="{{count($kriterias)}}">Kriteria</th>
                </tr>
                <tr>
                    @foreach($kriterias as $item)
                        <th>{{$item->kode_kriteria}}</th>
                    @endforeach()
                </tr>
            </thead>
            <tbody>
                @foreach ($kopis as $kopi)
                <tr>
                    <td>{{$kopi->nama_kopi}}</td>
                    @foreach($kriterias as $kriteria)
                        <td>{{number_format($matriks_terbobot[$kriteria->id][$kopi->id],'4',',','.')}}</td>
                    @endforeach()
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
<br>
</div>