<?php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    // Nombre de la tabla (si en la migración usaste "aspirantes")
    protected $table = 'aspirantes';

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'fecha_nacimiento',
        'telefono',
        'email'
    ];
}
