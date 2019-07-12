<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{

    protected $table = "galeris";

    protected $primaryKey = "id";

    protected $guarded = [];

    protected $fillable = [
        'judul',
        'link_foto',
        'id_ukm',
    ];
    
    public function ukm(){
        return $this->belongsTo('App\Ukm', 'id_ukm');
    }
}
