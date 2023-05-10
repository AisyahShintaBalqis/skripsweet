<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function create()
    {
        return view('kriteria.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'kode_kriteria' => 'required|string',
            'nama_kriteria' => 'required|string',
            'bobot' => 'required|integer',
            'atribut' => 'required|string',
        ]);

        Kriteria::create($request->all());

        // dd($request->all());
        return redirect()->route('kriteria.index')->with(
            'status',
            'Data Berhasil Di Tambahkan'
        );
    }

    public function index(Request $request)
    {
        $kriteria = \App\Models\Kriteria::paginate(5);
        return view('kriteria.index', compact('kriteria'));
    }

    public function edit($id)
    {
        $kriteria_to_edit = \App\Models\Kriteria::findOrFail($id);

        return view('kriteria.edit', ['kriteria' => $kriteria_to_edit]);
    }

    public function update(Request $request, $id)
    {


        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->update($request->all());
        return redirect()->route('kriteria.index', $id)->with(
            'status',
            'Update Berhasil'
        );
    }

    public function destroy($id)
    {
        $kriteria = \App\Models\Kriteria::findOrFail($id);
        $kriteria->delete();
        return redirect()->route('kriteria.index')->with(
            'status',
            'Data Berhasil Di Hapus'
        );
    }
}
