<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function create()
    {
        $kriterias = Kriteria::all();
        return view('parameter.create', compact('kriterias'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $this->validate($request, [
            'kode_parameter' => 'required|string|max:5',
            'nama_parameter' => 'required|string|max:50',
            'min' => 'required|integer',
            'max' => 'required|integer',
            'kriteria_id' => 'required',
        ], ['kriteria_id.required' => 'Nama Kriteria Tidak Boleh Kosong']);

        Parameter::create($request->all());

        return redirect()->route('parameter.index')->with('status', 'Data Berhasil di Tambahkan');
    }

    public function index(Request $request)
    {

        $parameters = Parameter::with('kriteria')->paginate(5);

        return view('parameter.index', compact('parameters'));
    }

    public function edit($id)
    {

        $kriteria = Kriteria::all();
        $parameter = Parameter::where('id', $id)->first();

        return view('parameter.edit', compact('kriteria', 'parameter'));
    }

    public function update(Request $request, $id)
    {

        $parameter = Parameter::where('id', $id)->first();
        $parameter->update([
            'kode_parameter' => $request->input('kode_parameter'),
            'kriteria_id' => $request->input('nama_kriteria'),
            'nama_parameter' => $request->input('nama_parameter'),
            'min' => $request->input('min'),
            'max' => $request->input('max'),

        ]);

        return redirect()->route('parameter.index')->with('status', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {
        $parameter = \App\Models\Parameter::findOrFail($id);
        $parameter->delete();
        return redirect()->route('parameter.index')->with(
            'status',
            'Data Berhasil Di Hapus'
        );
    }
}
