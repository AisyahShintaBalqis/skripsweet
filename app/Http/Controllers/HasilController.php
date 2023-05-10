<?php

namespace App\Http\Controllers;

use App\Models\Kopi;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HasilController extends Controller
{
    public function matriks_nilai($kriterias, $kopis)
    {
        $matriks = array();
        foreach ($kriterias as $kriteria) {
            foreach ($kopis as $kopi) {
                $id_kopi = $kopi->id;
                $id_kriteria = $kriteria->id;
                $nilai = Nilai::where('kopi_id','=' ,$id_kopi)->where('kriteria_id','=' ,$id_kriteria)->get();
                foreach ($nilai as $item_nilai) {
                    $matriks[$id_kriteria][$id_kopi] = $item_nilai->jumlah_nilai;
                }
            }
        }

        return $matriks;
    }

    public function matriks_normalisasi($matriks_awal)
    {
        $matriks = array();
        foreach ($matriks_awal as $id_kriteria => $jumlah_nilais) {
            foreach ($jumlah_nilais as $id_kopi => $nilai) {
                $kriteria = Kriteria::where('id', '=', $id_kriteria)->get();
                $tipe = $kriteria[0]->atribut;
                if ($tipe=='benefit') {
                    $matriks[$id_kriteria][$id_kopi] = $nilai/max($jumlah_nilais);
                }
                
                if($tipe=='cost') {
                    $matriks[$id_kriteria][$id_kopi] = min($jumlah_nilais)/$nilai;
                }
            }
        }
        return $matriks;
    }

    public function matriks_normalisasi_terbobot($kriterias, $kopis, $matriks_normal)
    {
        $matriks = array();
        foreach ($kriterias as $kriteria) {
            foreach ($kopis as $kopi) {
                $matriks[$kriteria->id][$kopi->id] = $matriks_normal[$kriteria->id][$kopi->id] * ($kriteria->bobot / 100);
            }
        }
        return $matriks;
    }

    public function max_min($matriks_terbobot)
    {
        $matriks = array();
        foreach ($matriks_terbobot as $id_kriteria => $jumlah_nilais) {
            $matriks[$id_kriteria] = (object)['max' => max($jumlah_nilais), 'min' => min($jumlah_nilais)];
        }
        return $matriks;
    }

    public function jarak_posneg($matriks_terbobot, $min_max, $kriterias, $kopis)
    {
        $matriks = array();
        foreach ($kopis as $kopi) {
            $nilai_jarak_max = 0;
            $nilai_jarak_min = 0;
            foreach ($kriterias as $kriteria) {
                $nilai_jarak_max += ($min_max[$kriteria->id]->max - $matriks_terbobot[$kriteria->id][$kopi->id]) ** 2;
                $nilai_jarak_min += ($matriks_terbobot[$kriteria->id][$kopi->id] - $min_max[$kriteria->id]->min) ** 2;
                $id_kriteria = $kriteria->id;
            }
            $matriks[$kopi->nama_kopi] = (object)['max' => sqrt($nilai_jarak_max), 'min' => sqrt($nilai_jarak_min)];
        }
        return $matriks;
    }

    public function perankingan($posneg)
    {
        $ranking = array();
        foreach ($posneg as $kopi => $nilais) {
            array_push($ranking, (object)['nilai' => $nilais->min / ($nilais->min + $nilais->max), 'kopi' => $kopi]);
        }
        return $ranking;
    }

    public function index()
    {
        $kopis = Kopi::all();
        $kriterias = Kriteria::all();

        $matriks_awal = $this->matriks_nilai($kriterias, $kopis);
        $matriks_normal = $this->matriks_normalisasi($matriks_awal);
        $matriks_terbobot = $this->matriks_normalisasi_terbobot($kriterias, $kopis, $matriks_normal);
        $max_min = $this->max_min($matriks_terbobot);
        $posneg = $this->jarak_posneg($matriks_terbobot, $max_min, $kriterias, $kopis);
        $rankings = $this->perankingan($posneg);
        $sortedRanks = Arr::sortDesc($rankings, function ($ranking) {
            return $ranking->nilai;
        });
        $nilais = array();
        foreach ($kriterias as $kriteria) {
            $id_kriteria = $kriteria->id;
            $nilais = Nilai::where('kriteria_id', '=', $id_kriteria)->get();
        }

        return view(
            'hasil.index',
            compact(
                'matriks_awal',
                'kopis',
                'kriterias',
                'matriks_normal',
                'nilais',
                'sortedRanks',
                'matriks_terbobot',
                'max_min',
                'posneg'
            )
        );
    }

    public function print()
    {
        $kopis = Kopi::all();
        $kriterias = Kriteria::all();

        $matriks_awal = $this->matriks_nilai($kriterias, $kopis);
        $matriks_normal = $this->matriks_normalisasi($matriks_awal);
        $matriks_terbobot = $this->matriks_normalisasi_terbobot($kriterias, $kopis, $matriks_normal);
        $max_min = $this->max_min($matriks_terbobot);
        $posneg = $this->jarak_posneg($matriks_terbobot, $max_min, $kriterias, $kopis);
        $rankings = $this->perankingan($posneg);
        $sortedRanks = Arr::sortDesc($rankings, function ($ranking) {
            return $ranking->nilai;
        });
        foreach ($kriterias as $kriteria) {
            $id_kriteria = $kriteria->id;
            $nilais = Nilai::where('kriteria_id', '=', $id_kriteria)->get();
        }
        return view('print.index', compact('sortedRanks'));
    }

    public function destroy($id)
    {

        $nilai = Nilai::where('id', $id)->first();
        $nilai->delete();

        return redirect()->route('nilai.index')->with('status', 'Data Berhasil di Hapus');
    }
}
