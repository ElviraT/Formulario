@extends('layouts.Base')
@section('nav_superior')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{'Sección 1'}}</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{'Formulario'}}</li>
  </ol>
  <h5 class="font-weight-bolder mb-0">{{'Ficha del Emprendedor'}}</h5>
</nav>
@endsection

@section('content')
	{!! Form::open(['route' => ['section1.add'],  'method' => 'post', 'autocomplete' =>'off', 'class' => 'text-start' ]) !!}
	<div class="col-lg-12 col-md-8 col-4 mx-auto">
		<div class="row">
			<div class="col-6">
				<div class="input-group input-group-static my-3">
		            <label>{{'Nombres'}}</label>
		            <input type="text" name="nombres" class="form-control" id="nombres" required autofocus="true" maxlength="200">
		        </div>
	        </div>
	        <div class="col-6">
		        <div class="input-group input-group-static my-3">
		            <label>{{'Apellidos'}}</label>
		            <input type="text" name="apellidos" class="form-control" id="apellidos" required maxlength="200">
		        </div>			
	        </div>
	        <div class="col-6">
		        <div class="input-group input-group-static my-3">
		            <label>{{'Cedula de Identidad'}}</label>
		            <input type="text" name="cedula" class="form-control" id="cedula" required maxlength="9">
		        </div>			
	        </div>	
	        <div class="col-6">
		        <div class="input-group input-group-static my-3">
			      <label>{{'Fecha de nacimiento'}}</label>
			      <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
			    </div>			
	        </div>	
	        <div class="col-6">
		        <div class="input-group input-group-static my-3">
		            <label>{{'Correo'}}</label>
		            <input type="email" name="correo" class="form-control" id="correo" required maxlength="100">
		        </div>			
	        </div>
	        <div class="col-6">
		        <div class="input-group input-group-static my-3">
		            <label>{{'Teléfono'}}</label>
		            <input type="text" name="telefono" class="form-control" id="telefono" required maxlength="20">
		        </div>			
	        </div>			
		</div>
		<hr>
		<div class="row">
			<div class="col-6">
	            <label>{{'Tiene Emprendimiento'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="tiene_emprendimiento" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="tiene_emprendimiento" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6">
	        	<div class="input-group input-group-static my-3">
		            <label>{{'Nombre del Emprendimiento'}}</label>
		            <input type="text" name="nombre_emprendimiento" class="form-control" id="nombre_emprendimiento" maxlength="200">
		        </div>
	        </div>
	        <div class="col-12">
	        	<div class="input-group input-group-static my-3">
		            <label>{{'Descripción del Emprendimiento'}}</label>
		            <textarea name="descripcion" id="descripcion" class="form-control" maxlength="300"></textarea>
		        </div>
	        </div>
	        <div class="col-6">
	        	<div class="input-group input-group-static my-3">
		            <label>{{'Sector Economico'}}</label>
		            <input type="text" name="sector_economico" class="form-control" id="sector_economico" maxlength="200">
		        </div>
	        </div>
	        <div class="col-6">
	        	<div class="input-group input-group-static my-3">
		            <label>{{'Ubicación'}}</label>
		            <input type="text" name="ubicacion" class="form-control" id="ubicacion" maxlength="100">
		        </div>
	        </div>
	        <div class="col-4 my-3">
			     	<label>{{'Estado'}}</label>
		            {!! Form::select('id_state',$estado, null, [
		                'placeholder' => 'Seleccione', 
		                'class' => 'pickerSelectClass',
		                'id' => 'id_state',
		                'required'=>'required'
		                ])
		            !!}
	        </div>
	        <div class="col-4 my-3">
	     			<label>{{'Municipio'}}</label>
		            {!! Form::select('id_municipality',[], null, [
		                'placeholder' => 'Seleccione', 
		                'class' => 'pickerSelectClass',
		                'id' => 'id_municipality',
		                'required'=>'required'
		                ])
		            !!}
	        </div>
	        <div class="col-4 my-3">
	     			<label>{{'Parroquia'}}</label>
		            {!! Form::select('id_parish',[], null, [
		                'placeholder' => 'Seleccione', 
		                'class' => 'pickerSelectClass',
		                'id' => 'id_parish',
		                'required'=>'required'
		                ])
		            !!}
	        </div>
		</div>
	</div>

	<div class="text-center">
        <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">
             <i class="fa fa-save"></i>
            {{' Guardar'}}
        </button>
    </div>
    {!! Form::close() !!}

@endsection
@section('js')
@include('emprendedores.js.js')
@endsection