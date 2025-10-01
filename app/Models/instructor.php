<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    protected $table = 'instructor';
    protected $fillable = ['nombre', 'apellido', 'documento', 'telefono', 'email', 'especialidad'];

    public function cursos()
    {
        return $this->hasMany(curso::class, 'instructor_id');
    }
}
