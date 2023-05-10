<div id="print" class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-right rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Ranking</h6>
        </div>
        <table id="rank" class="table table-hover mt-3 ">
            <thead>
                <tr>
                    <th scope="col">Kopi</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Ranking</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sortedRanks as $index => $ranking)                
                <tr>
                    <td>{{$ranking->kopi}}</td>
                    <td>{{number_format($ranking->nilai,'4',',','.')}}</td>
                    <td>{{$index+1}}</td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
<br>
<style>
    @media print{
        *{
            visibility: hidden;
        }

        #print, #print *{
            visibility: visible;
        }
        
        #print{
            position: absolute;
            top: 0;
            left: 0;
            print-color-adjust: exact; 
        }

        #print, #print .btn{
            visibility: hidden;
        }

        #rank {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #rank td, #rank th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #rank tr:nth-child(even){background-color: #f2f2f2;}

        #rank th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    }
</style>
<button class="btn btn-warning" onclick="window.print()">Print</button>
</div>