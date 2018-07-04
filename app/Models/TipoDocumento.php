<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

    protected $hidden = [
       'remember_token',
    ];
    public function usuarios(){
        return $this->hasMany(Usuario::Class);
    }




}
