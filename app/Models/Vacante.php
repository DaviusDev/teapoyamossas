<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $fillable = ['vacante_id','vacante', 'nombre', 'telefono', 'correo', 'cv_path'];
}
