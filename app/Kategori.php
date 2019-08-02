<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'kategori'
    ];

    public function ukm(){
        return $this->hasMany('App\Ukm', 'id_kategori');
    }
}
