<?php

namespace App\Http\Controllers;

use App\Models\Kopi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KopiController extends Controller
{
    public function create()
    {
        return view('kopi.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $this->validate($request, [
            'nama_kopi' => 'required|string',
            'asal_kopi' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'required||mimes:png,jpg,jpeg,bmp,gif,webp,image|max:2048',
        ]);

        if ($request->file('foto')) {
            $image_path = $request->file('foto')->store('kopi_foto', 'public');
        }

        Kopi::create([
            'nama_kopi' => $request->input('nama_kopi'),
            'asal_kopi' => $request->input('asal_kopi'),
            'deskripsi' => $request->input('deskripsi'),
            'foto' => $image_path,
        ]);

        return redirect()->route('kopi.index')->with(
            'status',
            'Data Berhasil di Tambahkan'
        );
    }

    public function index(Request $request)
    {

        $kopi = \App\Models\Kopi::paginate(10);

        return view('kopi.index', compact('kopi'));
    }

    public function edit($id)
    {

        $kopi_edit = \App\Models\Kopi::findOrFail($id);
        return view('kopi.edit', ['kopi' => $kopi_edit]);
    }

    public function update(Request $request, $id)
    {

        $namakopi = $request->get('nama_kopi');
        $asalkopi = $request->get('asal_kopi');
        $deskripsi = $request->get('deskripsi');

        $kopi = \App\Models\Kopi::findorFail($id);

        $kopi->nama_kopi = $namakopi;
        $kopi->asal_kopi = $asalkopi;
        $kopi->deskripsi = $deskripsi;

        if ($request->file('foto')) {
            if ($kopi->foto == file_exists(storage_path('app/public/' . $kopi->foto))) {
                Storage::delete('public/' . $kopi->foto);
            }
            $kopi_foto = $request->file('foto')->store('kopi_foto', 'public');

            $kopi->foto = $kopi_foto;
        }
        $kopi->save();
        return redirect()->route('kopi.index', [$id])->with('status', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {

        $kopi = \App\Models\Kopi::findOrFail($id);
        $kopi->delete();

        return redirect()->route('kopi.index')->with('status', 'Data Berhasil di Hapus');
    }
}
