<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>nama</th>
            <th>Score</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td> {{ $student->id }} </td>
                <td> {{ $student->name }} </td>
                <td> {{ $student->score }} </td>
            </tr>
        @endforeach
    </table>
    current page : {{ $students->currentPage() }}
    Total page : {{ $students->total() }}
    Data Per page : {{ $students->perPage() }}


    {{ $students->links('pagination::bootstrap-4') }}
</body>

</html>
