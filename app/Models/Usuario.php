<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $fillable = [
        'nombre', 'apellido', 'numero','correo','usuario','password','rols_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function tipo_documentos(){
    return $this->belongsTo(TipoDocumento::class);

}
    public function rols(){
        return $this->belongsTo(Rol::class);
    }

    public function scopeBuscar($query, $usuario){

        return $query->Where('usuario','LIKE',"%$usuario%");

    }

}
