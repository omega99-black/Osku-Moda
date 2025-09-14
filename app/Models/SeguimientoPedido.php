<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SeguimientoPedido
 * 
 * @property int $id_seguimiento
 * @property int $id_venta
 * @property int $id_estado
 * @property Carbon $fecha_actualizacion
 * @property string|null $observaciones
 * 
 * @property Venta $venta
 * @property EstadosSeguimiento $estados_seguimiento
 *
 * @package App\Models
 */
class SeguimientoPedido extends Model
{
	protected $table = 'seguimiento_pedido';
	protected $primaryKey = 'id_seguimiento';
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'id_estado' => 'int',
		'fecha_actualizacion' => 'datetime'
	];

	protected $fillable = [
		'id_venta',
		'id_estado',
		'fecha_actualizacion',
		'observaciones'
	];

	public function venta()
	{
		return $this->belongsTo(Venta::class, 'id_venta');
	}

	public function estados_seguimiento()
	{
		return $this->belongsTo(EstadosSeguimiento::class, 'id_estado');
	}
}
