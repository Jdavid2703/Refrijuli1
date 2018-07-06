<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','cantidad','id_categoria','stock_min','stock_max','precio_unitario','disponibilidad',
    ];

//PP
    protected $hidden = [
        'remember_token',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::Class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::Class);
    }

}
