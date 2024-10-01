<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Detalhes da Cidade</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Cidade</h1>
        <p><strong>Nome:</strong> {{ $city->name }}</p>
        <p><strong>Estado:</strong> {{ $city->state->name }}</p>
        <p><strong>País:</strong> {{ $city->state->country->name }}</p>
        <a href="{{ url('/') }}">Voltar para a lista</a>
    </div>
</body>
</html>
