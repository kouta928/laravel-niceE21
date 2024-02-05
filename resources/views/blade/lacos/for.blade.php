<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço for</title>
</head>
<body>
    {{-- USANDO LAÇO FOR --}}
    @for($i = 0; $i < count($dias); $i++)

    <p>
        {{$dias[$i]}}
        @if($dias[$i] == 'Domingo' || $dias[$i] == 'Sábado')
        <small> é final de semana</small>
        @else
        <small> é dia útil</small>
        @endif
    </p>

    @endfor
</body>
</html>