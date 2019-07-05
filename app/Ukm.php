<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $fillable = [
        'nama',
        'namapendek',
        'hari',
        'jam',
        'tempat',
        'profil',
        'ketua',
        'npm',
        'pembina',
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function agenda(){
        return $this->hasMany('App\Agenda');
    }
    
    public function anggota(){
        return $this->hasMany('App\Anggota','id_ukm');
    }

    public function berita(){
        return $this->hasMany('App\Berita','id_ukm');
    }

    public function galeri(){
        return $this->hasMany('App\Galeri');
    }

    public function prestasi(){
        return $this->hasMany('App\Prestasi', 'id_ukm');
    }

    public function registrasi(){
        return $this->hasMany('App\Registrasi');
    }
}
