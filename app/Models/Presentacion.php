<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $fillable = [
        'descripcion',
    ];

//PP
    protected $hidden = [
        'remember_token',
    ];
    public function insumo(){
        return $this->hasMany(Insumo::Class);
    }
}
