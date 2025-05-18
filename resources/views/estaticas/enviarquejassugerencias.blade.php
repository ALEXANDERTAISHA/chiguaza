<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quejas y sugerencias</title>
</head>
<body>
    <h5>Listado de quejas y sugerencias enviadas</h5>
    <ul>
        @foreach ($qs as $s)
            <li>
                <strong>{{ $s->dependencia }}:</strong> {!! $s->descripcion !!}
                <hr>
            </li>
        @endforeach
    </ul>
    
</body>
</html>