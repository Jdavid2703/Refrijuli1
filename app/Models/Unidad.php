<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = [
        'tipo_unidad','cantidad',
    ];

    protected $hidden = [
        'remember_token',
    ];
    public function insumo(){
        return $this->hasMany(Insumo::Class);
    }
}
