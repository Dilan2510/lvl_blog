<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>
    </head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <body>
        <div class="container">
            <h1>lista</h1>
            @forelse ($category as $item)
                <h1>{{ $item->name }}</h1>
            @empty
            @endforelse
        </div>
    </body>

</html>
