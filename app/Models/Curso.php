<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    // Definimos la tabla en singular para mantener el mismo formato
    protected $table = 'instructor';

    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'telefono',
        'email',
        'especialidad',
    ];

    public function cursos()
    {
        return $this->hasMany(curso::class, 'instructor_id');
    }
}
