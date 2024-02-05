<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço while</title>
</head>
<body>
@php
$count = 1;
@endphp
<ul>
@while($count <= 5)
    <li>Número: {{$count}}</li>
    @php
        $count++;
    @endphp
@endwhile
</ul>
</body>
</html>