<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($trains as $train)
            <li>
                <p><span>Nome azieda:</span><strong> {{ $train->Azienda }}</strong></p>
                <p><span>Stazione_di_partenza:</span><strong> {{ $train->Stazione_di_partenza }}</strong></p>
                <p><span>Stazione_di_arrivo:</span><strong> {{ $train->Stazione_di_arrivo }}</strong></p>
                <p><span>Orario_di_partenza:</span><strong> {{ $train->Orario_di_partenza }}</strong></p>
                <p><span>Orario_di_arrivo:</span><strong> {{ $train->Orario_di_arrivo }}</strong></p>
                <p><span>Codice_treno:</span><strong> {{ $train->Codice_treno }}</strong></p>
                <p><span>Numero_di_carrozze:</span><strong> {{ $train->Numero_di_carrozze }}</strong></p>
                <p><span>In_orario:</span><strong> {{ $train->In_orario }}</strong></p>
                <p><span>Cancellato:</span><strong> {{ $train->Cancellato }}</strong></p>
            </li>
        @endforeach
    </ul>
</body>
</html>
