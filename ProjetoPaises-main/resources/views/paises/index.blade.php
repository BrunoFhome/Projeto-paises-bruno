<h1>Países</h1>

<ul>
    @foreach($paises as $p)
        <li>
            <a href="{{ route('paises.show', $p['nome']) }}">{{ $p['nome'] }}</a>
        </li>
    @endforeach
</ul>