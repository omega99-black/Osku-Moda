<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table = 'producto_categoria';
    public $timestamps = false;

    protected $fillable = [
        'id_producto',
        'id_categoria',
    ];
}
