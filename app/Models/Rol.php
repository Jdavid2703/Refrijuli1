<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'rol','descripcion',
    ];


    protected $hidden = [
        'remember_token',
    ];
    public function usuarios(){
        return $this->hasMany(Usuario::Class);
    }
}
