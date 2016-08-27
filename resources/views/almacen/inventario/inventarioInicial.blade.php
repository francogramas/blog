@extends('layouts.dashboard')
@section('page_heading','Inventario inicial')
@section('section')
{!! Form::open(['route' => 'inventario.inicial.store','method'=>'POST']) !!}
<div>
	{!! Form::hidden('numero',0,['id'=>'numero']) !!}
	{!! Form::hidden('prefijo','',['id'=>'prefijo']) !!}
	{!! Form::hidden('tercero_id',1,['id'=>'tercero_id']) !!}
	{!! Form::hidden('fecha',$dateActual,['id'=>'fecha']) !!}
	{!! Form::hidden('tipo',6,['id'=>'tipo']) !!}
	{!! Form::hidden('estado_id',1,['id'=>'estado_id']) !!}
</div>
	
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-2">
				<h5>Cantidad</h5>
				{!! Form::number('cantidad','1',['id'=>'cantidad','required'=>'required','class'=>'form-control','placeholder'=>'Cantidad']) !!}
			</div>
			
			<div class="col-sm-10">
				<h5>Producto</h5>
				{!! Form::hidden('producto_id',null,['id'=>'producto_id','class'=>'form-control']) !!}				
				{!! Form::text('buscarP',null,['id'=>'buscarP','required'=>'required','autocomplete'=>'on','class'=>'form-control','placeholder'=>'Prodcuto...']) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-3">
				<h5>Valor</h5>
				{!! Form::number('valor',null,['id'=>'valor','required'=>'required','class'=>'form-control','placeholder'=>'$0.00']) !!}
			</div>
			<div class="col-sm-3">
				<h5>Costo</h5>
				{!! Form::number('costo',null,['id'=>'costo','required'=>'required','class'=>'form-control','placeholder'=>'$0.00']) !!}
			</div>
			<div class="col-sm-3">
				<h5>Stock Minimo</h5>
				{!! Form::number('stockMin','1',['id'=>'stockMin','required'=>'required','class'=>'form-control','placeholder'=>'1']) !!}
			</div>
			<div class="col-sm-3">
				<h5>Lote</h5>
				{!! Form::text('lote','0000',['id'=>'lote','required'=>'required','class'=>'form-control','placeholder'=>'0000']) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		<h5>Vence</h5>
		{!! Form::date('vence',$date,['id'=>'vence','required'=>'required','class'=>'form-control']) !!}
	</div>
	<div class="col-sm-1">
		<h5><br></h5>
		<button type="submit" class="btn btn-primary" >Agregar</button>
	</div>
	<div class="col-sm-1">
		<h5><br></h5>
		<button type="submit" class="btn btn-success" formnovalidate="formnovalidate">Finalizar</button>
	</div>
	<div class="col-sm-1">
		<h5><br></h5>
		<button type="submit" class="btn btn-warning" formnovalidate="formnovalidate">Posponer</button>
	</div>
	<div class="col-sm-3">
		
	</div>
	<div class="col-sm-2">
		<h5>Valor Total</h5>
	</div>
	<div class="col-sm-1">
		<h5>Costo Total</h5>
	</div>
	<div class="col-sm-1">
		<h5>Utilidad Neta</h5>
	</div>
</div>
<div class="row">
	<div class="col-sm-10">
		<table class="table table-bordered">
			<caption>Listado de Productos</caption>
			<thead class="theadN">
				<tr>
					<td>Cantidad</td>
					<td>Código</td>					
					<td>Prodcuto</td>
					<td>Lote</td>
					<td>Vence</td>					
					<td>Costo</td>
					<td>Costo Total</td>
					<td>Valor</td>
					<td>Valor total</td>					
				</tr>
			</thead>
			<tbody>
				@foreach ($facturaDetalles as $facturaDetalle)
					<tr>
						<td> {{ $facturaDetalle->cantidad }} </td>
						<td> {{ $facturaDetalle->codigo }} </td>
						<td> {{ $facturaDetalle->nombre }} </td>
						<td> {{ $facturaDetalle->lote }} </td>
						<td> {{ Carbon\Carbon::parse($facturaDetalle->vence)->format('d-m-Y') }} </td>
						<td> {{ '$ '.number_format(($facturaDetalle->costo),2, '.', ',') }} </td>						
						<td> {{ '$ '.number_format((($facturaDetalle->costo)*($facturaDetalle->cantidad)),2, '.', ',') }} </td>
						<td> {{ '$ '.number_format(($facturaDetalle->valor),2, '.', ',') }} </td>																
						<td> {{ '$ '.number_format((($facturaDetalle->valor)*($facturaDetalle->cantidad)),2, '.', ',') }} </td>						
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@stop