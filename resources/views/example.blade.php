<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testing</title>
    </head>

    <body>
        <p>Your students</p>
        <ul>
            @foreach ($students as $no => $std)
                <li>{{ $std->name }} </li>
            @endforeach
        </ul>
    </body>

</html>
