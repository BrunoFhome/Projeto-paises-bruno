<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cidades da API</title>
</head>
<body>
    <div class="container">
        <h1>Cidades e Estados da API do IBGE</h1>

        <h2>Estados</h2>
        <ul>
            @foreach($states as $state)
                <li>{{ $state['nome'] }} ({{ $state['sigla'] }})</li>
            @endforeach
        </ul>

        <h2>Cidades de São Paulo</h2>
        <ul>
            @foreach($cities as $city)
                <li>{{ $city['nome'] }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
