<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
</head>
<body>
    <ul class="container">
        @foreach ($trains as $train)
            <div class="card">
                <li>Nome azieda: {{ $train->company }}</li>
                <li>Stazione di partenza: {{ $train->departure_station }}</li>
                <li>Stazione di arrivo: {{ $train->station_of_arrival }}</li>
                <li>Orario di partenza: {{ $train->departure_time }}</li>
                <li>Orario di arrivo: {{ $train->arrival_time }}</li>
                <li>Codice treno: {{ $train->train_code }}</li>
                <li>Numero di carrozze: {{ $train->number_of_coaches }}</li>
                <li>In orario: {{ $train->in_time }}</li>
                <li>Cancellato: {{ $train->deleted }}</li>
            </div>
        @endforeach
    </ul>
</body>
</html>
