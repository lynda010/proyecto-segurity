<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aspirante extends Model
{
    protected $table = 'aspirante';
    protected $fillable = ['nombre', 'apellido', 'documento', 'fecha_nacimiento', 'telefono', 'email'];

}