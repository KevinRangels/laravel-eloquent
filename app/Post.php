<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public function user(){
        return  $this->belongsTo(User::class); //Pertenece a un usuario
    }

    public function category(){
        return  $this->belongsTo(Category::class); //Pertenece a una categoria
    }

     public function comments(){
        return  $this->morphMany(Comment::class, 'commentable'); //Tiene muchos comentarios(POLIMORFISMO)
    }

     public function image(){
        return  $this->morphOne(Image::class, 'imageable'); //Tiene una imagen(POLIMORFISMO)
    }

     public function tags(){
        return  $this->morphToMany(Tag::class, 'taggable'); //un post puede tener muchas etiquetas y una etiqueta puede tener muchos posts (POLIMORFISMO)
    }

}
