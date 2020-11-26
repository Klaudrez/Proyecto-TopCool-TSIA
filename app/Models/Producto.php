<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function subCategoria(){ //$producto->subCategoria->categoria->nombre
        return $this->belongsTo(SubCategoria::class); // producto pertenece a una subcategoria
    }
}

