<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($persons as $person)
        <p>{{ $person['name'] }}</p>
    @endforeach

    @forelse ($empty_persons as $person)
        <p>{{$person['name']}}</p>
    @empty
        <p>no hay personas registradas</p>
    @endforelse

    @foreach ($persons as $person)
        @if ($loop->first)
            esta es la primera iteracion del bucle {{$person['name']}}
        @endif
        <br>
        @if ($loop->last)
            esta es la ultima iteracion del bucle {{$person['name']}}
        @endif
    @endforeach

    @foreach ($persons as $person)
        @continue ($person['name'] == 'Liz')
            <p>{{$person['name']}}</p>
        @break ($person['name'] == 'Aria')
    @endforeach
</body>
</html>
