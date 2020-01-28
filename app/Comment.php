<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     public function commentable(){
        return  $this->morphTo(); //Comentario pertenece a  un usuario
    }
     public function user(){
        return  $this->belongsTo(User::class); //Pertenece a un usuario
    }

}
