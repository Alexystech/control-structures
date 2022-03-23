<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hola

    @if ($number  > 10)
        <p>{{ $number }} es mayor a 10</p>
    @elseif ($number == 10)
        <p>{{ $number }} es igual a 10</p>
    @else
        <p>{{ $number }} es menor a 10</p>
    @endif

    @if ( true )
        <nav>
            <ul>
                <li>Home</li>
                <li>Reclutamiento</li>
                <li>Contactanos</li>
                <li>Acerca de</li>
            </ul>
        </nav>
    @endif

    @unless ( true )
        se imprime este texto cuando shownav sea false
    @endunless

    @while ( $number < 10 )
        <p>se imprime este texto hasta que se cumpla la con la condicion</p>
        {{$number = $number+1}}
    @endwhile

    @foreach ($clients as $client)
        <p>{{$client['name']}}</p>
    @endforeach

</body>
</html>
