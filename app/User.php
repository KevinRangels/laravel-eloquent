<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return  $this->hasOne(Profile::class); //Tiene un perfil
    }
    public function level(){
        return  $this->belongsTo(Level::class); //Pertenece a un nivel
    }
    public function groups(){
        return  $this->belongsToMany(Group::class)->withTimestamps(); //Pertenece y tiene muchos
    }
    public function location(){
        return  $this->hasOneThrough(Location::class, Profile::class); //Tiene uno a traves de Perfil
    }
    public function posts(){
        return  $this->hasMany(Post::class); //Tiene muchos, sirve para ver cuantos Post pertenecen a este usuario
    }
    public function videos(){
        return  $this->hasMany(Video::class); //Tiene muchos, sirve para ver cuantos Videos pertenecen a este usuario
    }
    public function comments(){
        return  $this->hasMany(Comment::class); //Tiene muchos, sirve para ver cuantos Comentarios pertenecen a este usuario
    }
    public function image(){
        return  $this->morphOne(Image::class, 'imageable'); //Tiene muchos, sirve para ver cuantos Comentarios pertenecen a este usuario
    }
}
