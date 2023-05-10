<?php

namespace App\Http\Controllers;

use App\Models\Kopi;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function create()
    {
        $kopis = Kopi::all();
        $kriterias = Kriteria::all();

        return view('nilai.create', compact('kopis', 'kriterias'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate(
            $request,
            [
                'jumlah_nilai' => 'required',
                'kopi_id' => 'required',
                'kriteria_id' => 'required',
            ],
            ['kopi_id.required' => 'Nama Kopi Tidak Boleh Kosong'],
            ['kriteria_id.required' => 'Nama Kriteria Tidak Boleh Kosong']
        );

        Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('status', 'Data Berhasil di Tambahkan');
    }

    public function index()
    {
        $nilais = Nilai::with('kopi', 'kriteria')->paginate(10);

        return view('nilai.index', compact('nilais'));
    }

    public function edit($id)
    {

        $kopi = Kopi::all();
        $kriterias = Kriteria::all();
        $nilai = Nilai::where('id', $id)->first();

        return view('nilai.edit', compact('kopi', 'kriterias', 'nilai'));
    }

    public function update(Request $request, $id)
    {

        $nilai = Nilai::where('id', $id)->first();
        $nilai->update([
            'kopi_id' => $request->input('nama_kopi'),
            'kriteria_id' => $request->input('nama_kriteria'),
            'jumlah_nilai' => $request->input('jumlah_nilai'),
        ]);

        return redirect()->route('nilai.index')->with('status', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {

        $nilai = Nilai::where('id', $id)->first();
        $nilai->delete();

        return redirect()->route('nilai.index')->with('status', 'Data Berhasil di Hapus');
    }
}
