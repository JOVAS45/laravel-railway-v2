<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'contrasena',
        'estado',
        'telefono',
        'celular',
        'direccion',
        'tipoUsuario_id',
        'rol_id',
    ];

    public $timestamps = true;

    // Relación con la tabla tipo_usuario
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipoUsuario_id');
    }

    // Relación con la tabla rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
