<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testing</title>
    </head>

    <body>
        <h1>Hello World {{ $nama }}</h1>
        @if ($nama == 'rahul')
            <h1> Ganteng</h1>
        @else
            <h1>B aja</h1>
        @endif
    </body>

</html>
