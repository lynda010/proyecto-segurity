<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructores'; // 👈 plural

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
        return $this->hasMany(Curso::class, 'instructor_id');
    }
}
