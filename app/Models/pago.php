<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    protected $table = 'pago';
    protected $fillable = ['matricula_id', 'monto', 'fecha_pago', 'metodo_pago'];
}
