<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        return  $this->hasMany(Post::class); //Tiene muchos, sirve para ver cuantos posts pertenecen a esta categoria
    }

     public function videos(){
        return  $this->hasMany(Video::class); //Tiene muchos, sirve para ver cuantos videos pertenecen a esta categoria
    }
}
