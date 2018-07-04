<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
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
