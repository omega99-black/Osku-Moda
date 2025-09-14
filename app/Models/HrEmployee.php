<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HrEmployee extends Model
{
    // Nombre de la tabla (si no sigue la convención "hr_employees")
    protected $table = 'hr_employees';

    // Campos que se pueden insertar masivamente
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];
}
