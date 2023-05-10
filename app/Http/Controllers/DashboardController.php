<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Kopi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahkopi = Kopi::count();
        $pengujian = History::count();
        $user = User::count();
        return view('dashboard', compact('jumlahkopi', 'pengujian', 'user'));
    }
}
