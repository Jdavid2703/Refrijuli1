<?php

namespace App\Models;

use App\Models\Estado;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'fecha_entrega', 'fecha_pedido', 'direccion_entrega', 'hora_entrega', 'total_monto', 'id_usuario', 'id_estado','id_producto','id_insumo',
    ];


    protected $hidden = [
        'remember_token',
    ];

    public function estados()
    {
        return $this->belongsTo(Estado::Class);
    }

    public function usuarios()
    {
        return $this->belongsTo(Usuario::Class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::Class);
    }

    public function insumos()
    {
        return $this->hasMany(Insumo::Class);
    }



}
