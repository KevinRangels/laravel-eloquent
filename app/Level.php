<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users(){
        return  $this->hasMany(User::class); //Tiene muchos, sirve para ver cuantos usuarios pertenecen a este nivel
    }
    public function posts(){
        return  $this->hasManyThrough(Post::class, User::class); //Tiene muchos post a traves de usuarios
    }
    public function videos(){
        return  $this->hasManyThrough(Video::class, User::class); //Tiene muchos Videos a traves de usuarios
    }
}


//SE PUEDE VER LAS CANTIDAD Y LISTA DE POSTS DE UN USUARIO