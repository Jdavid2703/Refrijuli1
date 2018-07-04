<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','cantidad','id_categoria','stock_min','stock_max','id_presentacion','id_unidad','precio_unitario','disponibilidad',
    ];

//PP
    protected $hidden = [
        'remember_token',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::Class);
    }
    public function presentaciones()
    {
        return $this->belongsTo(Presentacion::Class);
    }
    public function unidades()
    {
        return $this->belongsTo(Unidad::Class);
    }

}
