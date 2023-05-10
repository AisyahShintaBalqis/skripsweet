<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'kopi_id',
        'kriteria_id',
        'jumlah_nilai',
    ];

    public function kriteria()
    {

        return $this->belongsTo(Kriteria::class);
    }

    public function kopi()
    {

        return $this->belongsTo(Kopi::class);
    }
}
