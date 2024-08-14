<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Koneksi Route View Controller</title>
    </head>
    <body>
        <h1>Koneksi view route controller</h1>
        {{$variableInteger}} &nbsp; {{$variableString}}
        {{-- {{$namaMakananFavorit[0].$namaMakananFavorit[1]}} --}}
        @foreach ($namaMakananFavorit as $item)
            <br>{{$item}}
        @endforeach
    </body>
</html>