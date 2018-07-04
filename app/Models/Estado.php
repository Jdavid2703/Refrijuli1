<?php

namespace App\Models;

use App\Pedido;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

//PP
    protected $hidden = [
        'remember_token',
    ];
    public function pedidos(){
        return $this->hasMany(Pedido::Class);
    }
}
