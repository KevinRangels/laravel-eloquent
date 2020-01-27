<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users(){
        return  $this->hasMany(User::class); //Tiene muchos, sirve para ver cuantos usuarios pertenecen a este nivel
    }
}
