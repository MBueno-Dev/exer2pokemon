<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon</title>

    </head>
    <body>
        <h3>Você escolheu o pokemon: {{ $nome }}</h3>
    </body>
</html>
