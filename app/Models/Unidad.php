<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

    protected $hidden = [
        'tipo_unidad','cantidad',
    ];
    public function insumo(){
        return $this->hasMany(Insumo::Class);
    }
}
