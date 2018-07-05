<?php

namespace App\Models;

use App\Pedido;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre','descripcion','precio',
    ];

    protected $hidden = [
        'remember_token',
    ];
    public function pedidos(){
        return $this->hasMany(Pedido::Class);
    }

}
