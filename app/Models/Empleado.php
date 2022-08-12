<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    /* Relación de 1:* Asistencia */
    public function empleados(){
        return $this->hasMany('App\Models\Empleado');
    }
}
