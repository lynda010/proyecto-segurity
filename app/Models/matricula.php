<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matricula extends Model
{
    protected $table = 'matricula';
    protected $fillable = ['aspirante_id', 'curso', 'fecha_matricula', 'estado'];
}
