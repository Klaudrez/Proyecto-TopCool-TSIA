<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenProducto extends Model
{
    use HasFactory;

    public function producto(){ //$imagenproducto->producto->nombre
        return $this->belongsTo(Producto::class); // imagen pertenece a un producto
    }
}
