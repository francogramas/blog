<?php

namespace SmartKet\Models\almacen\facturas;

use Illuminate\Database\Eloquent\Model;

class facturaDetalle extends Model
{

	protected $table='facturaDetalle';
	protected $primarykey='id';

	protected $fillable=['id','factura_id','cantidad','producto_id','costo','valor','stockMin','vence'];

	public function productos(){
		return $this -> hasmany(productos::class);
	}

	public function factura(){
		return $this -> hasmany(factura::class);
	}

}
