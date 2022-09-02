@extends('layouts.Base')
@section('nav_superior')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{'Sección 2'}}</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{'Formulario'}}</li>
  </ol>
  <h5 class="font-weight-bolder mb-0">{{'Formación'}}</h5>
</nav>
@endsection

@section('content')
	{!! Form::open(['route' => ['section2.add'],  'method' => 'post', 'autocomplete' =>'off', 'class' => 'text-start' ]) !!}
	<input type="hidden" name="id_emprendedor" id="id_emprendedor" value="{{$id}}">
	<div class="col-lg-12 col-md-8 col-4 mx-auto">
		<div class="row">
			<div class="col-6">
	            <label>{{'Taller Análisis de Costos'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="tanalisis" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="tanalisis" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6">
	            <label>{{'Taller Marketing y Redes Sociales'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="tmarketing" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="tmarketing" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6">
	            <label>{{'Taller Aspectos Jurídicos Contables'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="tjuridico" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="tjuridico" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-6">
	            <label>{{'Comercialización'}}</label>
	            <div class="form-check mb-3">
				  <input class="form-check-input" type="radio" name="comercializacion" id="customRadio1" value="1" required>
				  <label class="custom-control-label" for="customRadio1">{{'Si'}}</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="comercializacion" id="customRadio2" value="0" required>
				  <label class="custom-control-label" for="customRadio2">{{'No'}}</label>
				</div>
	        </div>
	        <div class="col-12">
				<div class="input-group input-group-static my-3">
		            <label>{{'Otro Taller'}}</label>
		            <input type="text" name="otaller" class="form-control" id="otaller" maxlength="100" onkeypress="return letrasNumeros(event)">
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