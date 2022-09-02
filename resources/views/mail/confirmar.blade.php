<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{'Confirmar Registro'}}</title>
</head>
<body>
    <div style="padding: 7px; text-align: center; background-color: #DDDBDB; color: #303030; line-height:35px;">
        <h3>{{'Estimado usuario: '}} <strong>{{ $entrepreneur->nombres.' '.$entrepreneur->apellidos }}</strong> {{'su registro a finalizado con éxito, el Movimiento Emprendedores de Venezuela, le agradecemos por tomarse el tiempo necesario para llenar los requisitos, su código de registro es: '}}</h3>
               
    <div align="center">
        <button type="button" style="background-color: #263238; padding: 7px; color: #FFFFFF; border-radius: 10px;">{{$entrepreneur->codigo}}</button>     
    </div>
<hr>
    <div>
        {!! QrCode::size(200)->generate($entrepreneur->nombres.' '.$entrepreneur->apellidos.'-'.$entrepreneur->codigo); !!}
    </div>
    </div>
</body>
</html>