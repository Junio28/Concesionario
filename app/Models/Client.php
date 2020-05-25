<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    protected $fillable = [
        'name','last_name','address','date','email'
    ];

    public function cars()
    {
        return $this->hasMany('App\Models\Car');  #Relacion uno a muchos
    }
}
