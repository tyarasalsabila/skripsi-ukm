<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'id_ukm',
        'id_user',
        'foto',
    ];
    
    public function ukm(){
        return $this->belongsTo('App\Ukm','id_ukm');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
