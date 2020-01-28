<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function posts(){
        return  $this->morphByMany(Post::class, 'taggable'); //un post puede tener muchas etiquetas y una etiqueta puede tener muchos posts (POLIMORFISMO)
    }

     public function videos(){
        return  $this->morphByMany(Video::class, 'taggable'); //un post puede tener muchas etiquetas y una etiqueta puede tener muchos posts (POLIMORFISMO)
    }
}
