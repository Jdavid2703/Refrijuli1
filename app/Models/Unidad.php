<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = [
        'tipo_unidad','cantidad',
    ];

    protected $hidden = [
        'remember_token',
    ];
    public function insumos(){
        return $this->hasMany(Insumo::Class);
    }
}
