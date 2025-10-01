<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $table = 'curso';
    protected $fillable = ['nombre', 'descripcion', 'duracion', 'instructor_id'];

    public function instructor()
    {
        return $this->belongsTo(instructor::class, 'instructor_id');
    }
}
