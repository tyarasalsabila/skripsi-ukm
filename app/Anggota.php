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
        'status',
        'id_ukm',
        'id_reg',
    ];

    public function ukm(){
        return $this->belongsTo('App\Ukm');
    }
}
