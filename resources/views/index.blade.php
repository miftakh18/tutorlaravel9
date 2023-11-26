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
            <th>aksi</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td> {{ $student->id }} </td>
                <td> <a href="{{ route('show', $student->id) }}"> {{ $student->name }}</a> </td>
                <td> {{ $student->score }} </td>
                <td>
                    <form action="{{ route('edit', $student->id) }}">
                        @csrf
                        <button type="submit">edit</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    current page : {{ $students->currentPage() }}
    Total page : {{ $students->total() }}
    Data Per page : {{ $students->perPage() }}


    {{ $students->links('pagination::bootstrap-4') }}
</body>

</html>
