@extends('layouts.Base')
@section('nav_superior')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{'Sección 3'}}</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{'Formulario'}}</li>
  </ol>
  <h5 class="font-weight-bolder mb-0">{{'Formalización Figura Jurídica'}}</h5>
</nav>
@endsection

@section('content')
	{!! Form::open(['route' => ['section3.add'],  'method' => 'post', 'autocomplete' =>'off', 'class' => 'text-start','files' => true ]) !!}

	<input type="hidden" name="id_emprendedor" id="id_emprendedor" value="{{$id}}">
	<div class="col-lg-12 col-md-8 col-4 mx-auto">
		<div class="row">
			<div class="col-6 my-3">
	            <label>{{'Tiene Figura Jurídica'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="figura_juridica" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="figura_juridica" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6 my-3">
	            <label>{{'Firma Personal'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="firma_personal" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="firma_personal" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6 my-3">
	            <label>{{'PYME'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="pyme" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="pyme" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6 my-3">
	            <label>{{'Compañia Anónima'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="compania_anonima" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="compania_anonima" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6 my-3">
	            <label>{{'Requiere Financiamiento'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="requiere_financiamiento" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="requiere_financiamiento" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6 my-3">
				<div class="input-group input-group-static">
		            <label>{{'Monto Estimado de Financiamiento en $'}}</label>
		            <input type="text" name="monto_estimado" class="form-control my-3" id="monto_estimado" maxlength="100">
		        </div>
	        </div>
	        <div class="col-4 my-3">
	            <label>{{'Posee Cuenta Bancaria'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="posee_cuenta" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="posee_cuenta" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-4 my-3">
		     	<label>{{'Banco'}}</label>
	            {!! Form::select('id_banco',$banco, null, [
	                'placeholder' => 'Seleccione', 
	                'class' => 'otro my-3',
	                'id' => 'id_banco'
	                ])
	            !!}
	        </div>
	        <div class="col-4 my-3">
		     	<label>{{'Banco 2'}}</label>
	            {!! Form::select('id_bancoA',$banco, null, [
	                'placeholder' => 'Seleccione', 
	                'class' => 'otro my-3',
	                'id' => 'id_bancoA'
	                ])
	            !!}
	        </div>
		</div>
		<hr>
		<div class="row">
			<h5>{{'Redes Sociales'}}</h5>
			<div class="col-4 my-3">
				<div class="input-group input-group-static">
		            <label>{{'Instagram'}}</label>
		            <input type="text" name="instagram" class="form-control" id="instagram" maxlength="100">
		        </div>
	        </div>
	        <div class="col-4 my-3">
				<div class="input-group input-group-static">
		            <label>{{'Facebook'}}</label>
		            <input type="text" name="facebook" class="form-control" id="facebook" maxlength="100">
		        </div>
	        </div>
	        <div class="col-4 my-3">
				<div class="input-group input-group-static">
		            <label>{{'Twitter'}}</label>
		            <input type="text" name="twitter" class="form-control" id="twitter" maxlength="100">
		        </div>
	        </div>
		</div>
		<hr>
		<div class="row">
			<h5>{{'Imagenes'}}</h5>

			<div class="col-6 my-3">
				<div class="row">
                    <div class="col-md-12">
                        <label>{{ 'Registro Mercantil' }}</label>
                        <input type="file" name="registro_mercantil" id="registro_mercantil">
                    </div>
                </div>
			</div>
			<div class="col-6 my-3">
				<div class="row">
                    <div class="col-md-12">
                        <label>{{ 'Copia de Cédula de Identidad' }}</label>
                        <input type="file" name="cedula" id="cedula">
                    </div>
                </div>
			</div>
			<div class="col-6 my-3">
				<div class="row">
                    <div class="col-md-12">
                        <label>{{ 'Copia de RIF' }}</label>
                        <input type="file" name="rif" id="rif">
                    </div>
                </div>
			</div>
			<div class="col-6 my-3">
				<div class="row">
                    <div class="col-md-12">
                        <label>{{ 'Certificado de Registro Emprender Juntos' }}</label>
                        <input type="file" name="certificado_emprende" id="certificado_emprende">
                    </div>
                </div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-6 my-3">
	            <label>{{'Indícanos el Promedio de tus ventas mensuales  '}}</label>
	            @foreach($rangos as $rango)
		            <div class="form-check mb-3">
					  <input class="form-check-input" type="radio" name="id_promedio" id="customRadio{{$rango->id}}" value="{{$rango->id}}" required>
					  <label class="custom-control-label" for="customRadio{{$rango->id}}">{{$rango->rango}}</label>
					</div>
				@endforeach
	        </div>
	        <div class="col-6 my-3">
	        	<label>{{'Indique si posee alguna multa'}}</label>
	        	<div class="form-check mb-3">
		        	<input type="checkbox" name="faov" id="faov" class="form-check-input">
		        	<label class="custom-control-label" for="faov">{{'FAOV'}}</label>
		        </div>
		        <div class="form-check mb-3">
		        	<input type="checkbox" name="inces" id="inces" class="form-check-input">
		        	<label class="custom-control-label" for="inces">{{'INCES'}}</label>
		        </div>
		        <div class="form-check mb-3">
		        	<input type="checkbox" name="ivss" id="ivss" class="form-check-input">
		        	<label class="custom-control-label" for="ivss">{{'IVSS'}}</label>
		        </div>
		        <div class="form-check mb-3">
		        	<input type="checkbox" name="sumar" id="sumar" class="form-check-input">
		        	<label class="custom-control-label" for="sumar">{{'SUMAR'}}</label>
		        </div>
		        <div class="form-check mb-3">
		        	<input type="checkbox" name="otra" id="otra" class="form-check-input">
		        	<label class="custom-control-label" for="otra">{{'OTRO...'}}</label>
		        </div>
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
@include('formalizacion.js.js')
@endsection