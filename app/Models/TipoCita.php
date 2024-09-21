<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCita extends Model
{
    use HasFactory;
    protected $table = 'tipo_cita';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public $timestamps = true;
}
