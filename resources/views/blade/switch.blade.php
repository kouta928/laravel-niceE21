<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch case com blade</h1>
    @switch($numero)
        @case(1)
        <p>Número um</p>
        @break

        @case(2)
        <p>Número dois</p>
        @break

        @case(3)
        <p>Número três</p>
        @break

        @default
        <p>Número indefinido</p>
    @endswitch
</body>
</html>