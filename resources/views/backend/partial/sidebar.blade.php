<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-warning"><i class="fa fa-user-edit me-2"></i>Maraqdia </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">

        </div>
        <div class="navbar-nav w-100">

            <a href="index.html" class="nav-item nav-link {{Request::is('dashboard') ? 'active':''}}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            {{-- <a href="{{route('profile.edit')}}"
                class="nav-item nav-link {{Request::is('profile') ? 'active':''}}"><i
                    class="fa fa-user-circle me-2"></i>Profil</a> --}}






            @if(Auth::user()->role == 'Admin')


            <a href="{{route('kriteria.index')}}" class="nav-item nav-link {{Request::is('kriteria') ? 'active':''}}"><i
                    class="fa fa-edit me-2"></i>Kriteria</a>

            <a href="{{route('parameter.index')}}"
                class="nav-item nav-link {{Request::is('parameter') ? 'active':''}}"><i
                    class="fa fa-server me-2"></i>Parameter</a>

            <a href="{{route('kopi.index')}}" class="nav-item nav-link {{Request::is('kopi') ? 'active':''}}">
                <i class="fa fa-coffee me-2"></i>Kopi</a>

            <a href="{{route('nilai.index')}}" class="nav-item nav-link {{Request::is('nilai') ? 'active':''}}"><i
                    class="fa fa-percent me-2"></i>Nilai</a>

            <a href="{{route('hasil.index')}}" class="nav-item nav-link {{Request::is('hasil') ? 'active':''}}"><i
                    class="fa fa-bullseye me-2"></i>Hasil</a>

            <a href="{{route('history.index')}}" class="nav-item nav-link {{Request::is('history') ? 'active':''}}"><i
                    class="fa fa-history me-2"></i>History</a>

            <a href="{{route('print.index')}}" class="nav-item nav-link {{Request::is('print') ? 'active':''}}"><i
                    class="fa fa-print me-2"></i>Print</a>


            <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>



            @else


            <a href="{{route('hasil.index')}}" class="nav-item nav-link {{Request::is('hasil') ? 'active':''}}"><i
                    class="fa fa-bullseye me-2"></i>Hasil</a>

            <a href="{{route('history.index')}}" class="nav-item nav-link {{Request::is('history') ? 'active':''}}"><i
                    class="fa fa-history me-2"></i>History</a>

            <a href="{{route('print.index')}}" class="nav-item nav-link {{Request::is('print') ? 'active':''}}"><i
                    class="fa fa-print me-2"></i>Print</a>

            <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400 bg-dark"></i>
                Logout
            </a>

            @endif


        </div>
    </nav>
</div>