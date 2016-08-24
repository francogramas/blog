@extends('layouts.dashboard')
@section('page_heading','Inventario inicial')
@section('section')
{!! Form::open(['route' => 'terceros.store','method'=>'POST']) !!}
	@include('partials.message')

<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-2">
				<h5>Cantidad</h5>
				{!! Form::number('cantidad','1',['id'=>'cantidad','required'=>'required','class'=>'form-control','placeholder'=>'Cantidad']) !!}
			</div>
			<div class="col-sm-10">
				<h5>Producto</h5>
				{!! Form::text('prodcuto',null,['id'=>'prodcuto','required'=>'required','class'=>'form-control','placeholder'=>'prodcuto']) !!}
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
		<button type="submit" class="btn btn-danger" formnovalidate="formnovalidate">Cancelar</button>
	</div>
	<div class="col-sm-1">
	</div>
	<div class="col-sm-2">
		<h4>Valor Total</h4>
	</div>
	<div class="col-sm-2">
		<h4>Costo Total</h4>
	</div>
	<div class="col-sm-2">
		<h4>Utilidad Neta</h4>
	</div>
	</div>
</div>
{!! Form::close() !!}
@stop