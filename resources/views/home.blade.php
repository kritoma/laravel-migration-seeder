<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train</title>
</head>
<body>
    <h1>Treni in partenza</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <h2>{{$train->azienda}}</h2>
                <p>Stazione partenza:{{$train->stazione_di_partenza}}</p>
                <p>Stazione arrivo:{{$train->stazione_di_arrivo}}</p>
                <p>Orario partenza:{{$train->orario_di_partenza}}</p>
                <p>Orario arrivo:{{$train->orario_di_arrivo}}</p>
                <p>Codice Treno:{{$train->codice_treno}}</p>
                <p>Numero carrozze:{{$train->numero_carrozze}}</p>
                <p>Data:{{$train->data}}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>