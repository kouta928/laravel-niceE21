<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Expressões com blade</h1>
    <!-- COMENTÁRIO HTML -->
    {{-- COMENTÁRIO DE BLADE--}}
    {{-- pegar os dados que vem da rota --}}
    {{-- neste tipo de uso de expressão, o blade realiza o escape automatico nos dados passados afim de evitar XSS --}}
    <p>Nome: {{$nome}}</p>

    {{-- FORMA SEM ESCAPE --}}
    <p>Nome sem escape: {!!$nome!!}</p>


</body>
</html>