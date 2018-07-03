<?php

namespace App;

use App\Models\Estado;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'fecha_entrega','fecha_pedido','direccion_entrega','hora_entrega','total_monto','id_usuario','id_estado',
    ];


    protected $hidden = [
        'remember_token',
    ];
    public function estados(){
        return $this->belongsTo(Estado::Class);
    }
    public function usuarios(){
        return $this->belongsTo(Usuario::Class);
    }

}
