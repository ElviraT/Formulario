@extends('layouts.Base')
@section('nav_superior')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{'Sección 4'}}</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{'Reporte'}}</li>
  </ol>
  <h5 class="font-weight-bolder mb-0">{{'Reporte General'}}</h5>
</nav>
@endsection

@section('content')
	{!! Form::open(['route' => ['reporte_general'],  'method' => 'post', 'autocomplete' =>'off', 'class' => 'text-start', 'onSubmit'=> 'return loading_show();' ]) !!}
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">{{ 'Reporte de Encuesta' }}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead style="background-color: #000; color: #fff !important;">
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{'Numero de guia'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{'Marca Temporal'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{'Nombre y Apellido'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'codigo'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Cédula'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Fecha de nacimiento'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Correo Electronico'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Numero de Telefono'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Tiene Emprendimiento'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Nombre del emprendimiento'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Descripción del Emprendimiento'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Sector Economico'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Ubicación'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Estado'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Municipio'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Parroquia'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Taller Analisis de Costos'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Taller Marketing y Redes Sociales'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Taller Aspectos Jurídicos Contables'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Comercialización'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Otro Taller'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Tiene Figura Jurídica'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Firma Personal'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'PYME'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Compañia Anónima'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Requiere Financiamiento'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Monto Estimado de Financiamiento en $'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Posee Cuenta Bancaria'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Entidad Bancaria'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Instagram'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Facebook'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Twitter'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Indícanos el Promedio de tus ventas mensuales'}}</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">{{'Indique si posee alguna multa'}}</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($emprendedores as $res)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>

                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->created_at }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->nombres.' '.$res->apellidos }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->codigo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->cedula }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->fecha_nacimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->correo }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->telefono }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->tiene_emprendimiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->nombre_emprendimiento }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->descripcion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->sector_economico }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->ubicacion }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->State->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Municipality->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->Direction->Parish->nombre }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tanalisis == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tmarketing == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->tjuridico == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Formation->comercializacion == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Formation->otaller }}</span>
                      </td>
                      <td class="align-middle text-center">

                        @if($res->Entrepreneurship->LegalData->figura_juridica == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->firma_personal == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->pyme == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->compania_anonima == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->requiere_financiamiento == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->monto_estimado }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->LegalData->posee_cuenta == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SI' }}</span>
                        @else
                        <span class="badge badge-sm bg-gradient-danger">{{ 'NO' }}</span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->LegalData->Bank->nombre }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->instagram }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->facebook }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->SocialNetworks->twitter }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs">{{ $res->Entrepreneurship->EconomicData->Average->rango }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($res->Entrepreneurship->EconomicData->faov == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'FAOV' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->inces == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'INCES' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->ivss == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'IVSS' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->sumar == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'SUMAR' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->otra == 1)
                        <span class="badge badge-sm bg-gradient-success">{{ 'OTRA' }}</span>
                        @endif
                        @if($res->Entrepreneurship->EconomicData->faov == 0 && $res->Entrepreneurship->EconomicData->inces == 0 && $res->Entrepreneurship->EconomicData->ivss == 0 && $res->Entrepreneurship->EconomicData->sumar == 0 && $res->Entrepreneurship->EconomicData->otra == 0)
                        <span class="badge badge-sm bg-gradient-info">{{ 'No posee deudas' }}</span>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
              <div align="right">
                {{ $emprendedores->links() }}                
              </div>
          </div>
        </div>
      </div>

    
    {!! Form::close() !!}

@endsection
@section('js')
@include('reporte.js.js')
@endsection