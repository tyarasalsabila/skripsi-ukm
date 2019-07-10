<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{   
    protected $fillable = [
        'link_foto',
        'id_ukm',
    ];
    
    public function ukm(){
        return $this->belongsTo('App\Ukm');
    }
}
