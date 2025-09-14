<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoSeguimiento extends Model
{
    protected $table = 'estados_seguimiento';
    protected $primaryKey = 'id_estado_seguimiento';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];
}
