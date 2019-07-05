<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $fillable = [
        'nama',
        'npm',
        'email',
        'hp',
        'fakultas',
        'jurusan',
        'angkatan',
        'id_ukm',
    ];

    public function ukm(){
        return $this->belongsTo('App\Ukm', 'id_ukm');
    }
}
