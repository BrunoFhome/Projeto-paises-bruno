<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Lista de Cidades</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Cidades</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>População (habitantes)</th>
                    <th>Área (km²)</th>
                    <th>País</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->state->name }}</td>
                        <td>{{ $city->population ?? 'Não disponível' }}</td>
                        <td>{{ $city->area ?? 'Não disponível' }}</td>
                        <td>{{ $city->state->country->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
