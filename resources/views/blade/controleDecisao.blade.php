<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{--  os controles de decisão são diretivas. Todas as diretivas começam com @ --}}

    {{-- IF --}}
    @if(10 > 5)
        <p>10 é maior que 5</p>
    @endif

    {{-- IF COM ELSE --}}
    @if(11 > 10)
        <p>Verdadeiro</p>
    @else
        <p>Falso</p>
    @endif

    {{-- USANDO IF ELSE IF E ELSE--}}
    @if($n < 10)
        <p>{{$n}} é menor que 10</p>
    @elseif($n >= 10 && $n < 100)
        <p>{{$n}} é igual ou maior que 10</p>
    @else
        <p>{{$n}} é maior ou igual a 100</p>
    @endif

    {{-- UNLESS EXECUTA O CODIGO APENAS SE A CONDIÇÃO FOR FALSA --}}
    @unless(1 > 1)
        <p>Essa condição com unless é falsa</p>
    @endunless

    {{-- ISSET - VERIFICA SE A VARIAVEL FOI SETADA--}}
    @isset($idade)
        <p>Idade: {{$idade}}</p>
    @endisset

    {{-- EMPTY - VERIFICA SE VARIAVEL É VAZIA --}}
    @empty($n)
        <p>Variavel esta vazia</p>
    @endempty

    {{-- DIRETIVAS DE AUTENTICAÇÃO  @AUTH @GUEST--}}

    @auth() {{-- @auth() ou @auth('sessao') --}}
        <p>usuario logado</p>
    @endauth

    @guest()

    @endguest


</body>
</html>