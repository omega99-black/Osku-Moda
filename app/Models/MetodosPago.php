<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodosPago extends Model
{
    protected $table = 'metodos_pago';
    protected $primaryKey = 'id_metodo_pago';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];
}
