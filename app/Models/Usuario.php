<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; // nombre real de la tabla
    protected $primaryKey = 'id_usuario'; // clave primaria
    public $timestamps = false; // tu tabla no tiene created_at / updated_at

    protected $fillable = [
        'nombre',
        'email',
        'contrasena',
        'estado',
        'id_rol',
    ];
}
