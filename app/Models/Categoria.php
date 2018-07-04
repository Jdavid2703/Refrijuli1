<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];

//PP
    protected $hidden = [
        'remember_token',
    ];

    public function insumos()
    {
        return $this->hasMany(Insumo::Class);
    }
}
