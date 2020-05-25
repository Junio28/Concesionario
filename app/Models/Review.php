<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";

    protected $fillable = [
        'type','made_review','others'
     ];
 
     public function cars()
     {
         return $this->belongsToMany('App\Models\Car');  #Relacion muchos a muchos
     }
}
