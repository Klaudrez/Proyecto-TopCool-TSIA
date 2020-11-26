<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function user(){ //$comentario->user->nombre
        return $this->belongsTo(User::class); // comentario pertenece a un usuario
    }
}
