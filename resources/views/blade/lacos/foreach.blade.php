<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
                <th>PARENTESCO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($familia as $f)
            <tr>
                <td>{{$f['nome']}} {{$loop->odd}}</td>
                <td>{{$f['idade']}}</td>
                <td>{{$f['parentesco']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>