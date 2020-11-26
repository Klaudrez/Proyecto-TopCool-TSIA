<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    public function categoria(){ //$subcategoria->categoria->nombre
        return $this->belongsTo(Categoria::class); //subCategoria pertenece a una categoria
    }
}
