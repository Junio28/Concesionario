<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "cars";

    protected $fillable = [
       'mark','model','price','clients_id'
    ];
    
    public function client()
    {
        return $this->belongsTo('App\Models\Client');  #Muchos a uno, pertenece a, inverso
    }

    public function reviews()
    {
        return $this->belongsToMany('App\Models\Review');  #muchos a muchos
    }
}
