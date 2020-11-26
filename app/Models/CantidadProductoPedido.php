<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CantidadProductoPedido extends Model
{
    use HasFactory;

    public function pedido(){ 
        return $this->belongsTo(Producto::class); 
    }
    public function producto(){ 
        return $this->belongsTo(Producto::class); 
    }
}
