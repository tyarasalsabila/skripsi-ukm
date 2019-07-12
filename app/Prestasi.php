<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'nama',
        'tahun',
        'id_ukm',
        'anggota',
    ];

    public function ukm(){
        return $this->belongsTo('App\Ukm');
    }

    // public function anggota(){
    //     return $this->belongsTo('App\Anggota');
    // }
}
