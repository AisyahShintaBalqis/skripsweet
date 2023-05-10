<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\History;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = DB::table('histories')->groupBy('id_pengujian')->get();
        return view('history.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        History::create([
            'nama_kopi' => 'Kintamani',
            'id_pengujian' => 2,
            'nilai' => 0.5,
        ]);
        $histories = DB::table('histories')->where('id_pengujian','=', '1')->get();
        return view('history.index', compact('histories'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $histories = DB::table('histories')->where('id_pengujian','=', $id)->get();
        return view('history.detail', compact('histories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
