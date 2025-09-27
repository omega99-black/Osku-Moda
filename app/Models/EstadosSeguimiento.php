<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadosSeguimiento extends Model
{
    protected $table = 'estados_seguimiento';
    protected $primaryKey = 'id_estado';
    public $timestamps = false;

    protected $fillable = [
        'nombre_estado'
    ];
}