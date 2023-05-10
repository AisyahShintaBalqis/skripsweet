<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_parameter',
        'kriteria_id',
        'nama_parameter',
        'min',
        'max',
    ];

    public function kriteria()
    {

        return $this->belongsTo(Kriteria::class);
    }
}
