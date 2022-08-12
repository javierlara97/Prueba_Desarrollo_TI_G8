<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    /* Relación de 1:* Empleado */
    public function asistencia(){
        return $this->belongsTo('App\Models\Asistencia');
    }
}
