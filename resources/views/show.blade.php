<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Showing Detail</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>id</th>
            <td> {{ $student->id }} </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td> {{ $student->name }} </td>
        </tr>
        <tr>
            <th>Score </th>
            <td> {{ $student->score }} </td>
        </tr>

        <tr>
            <th colspan="2">Aktivitas</th>
        </tr>

        @foreach ($student->activities as $no => $activity)
            <tr>
                <td> {{ $no + 1 }}</td>
                <td> {{ $activity->name }} </td>
            </tr>
        @endforeach

    </table>

</body>

</html>
