<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    protected $table = 'certificado';
    protected $fillable = ['matricula_id', 'fecha_emision', 'codigo_certificado'];
}
