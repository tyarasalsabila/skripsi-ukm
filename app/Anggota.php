<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nama',
        'jurusan',
        'fakultas',
        'angkatan',
        'aktif',
        'id_ukm',
    ];

    public function ukm(){
        return $this->belongsTo('App\Ukm');
    }
}
