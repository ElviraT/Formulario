<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{'Confirmar Registro'}}</title>
</head>
<body>
    <div style="text-align: justify;">
        <img style='height: 150px;' src='{{ url('https://www.tywey.com/Formulario/public/assets/img/imagen_correo.jpeg') }}' width="100%"/>
    </div>
    <div style="padding: 7px; text-align: center; background-color: #DDDBDB; color: #303030; line-height:35px;">
        <h3>{{'Estimado usuario: '}} <strong>{{ $entrepreneur->nombres.' '.$entrepreneur->apellidos }}</strong> {{'su registro a finalizado con éxito, el Movimiento Emprendedores de Venezuela, le agradecemos por tomarse el tiempo necesario para llenar los requisitos, su código de registro es: '}}</h3>
               
        <div align="center">
            <button type="button" style="background-color: #263238; padding: 7px; color: #FFFFFF; border-radius: 10px;">{{$entrepreneur->codigo}}</button>     
        </div>
        <hr>
        <div style="text-align: center;">
            <img style='display:block;margin-left: auto; margin-right: auto;' src='{{ url('https://www.tywey.com/Formulario/storage/app/documentos/'.$entrepreneur->id.'/img-qr.png') }}' />

        </div>
    </div>
</body>
</html>