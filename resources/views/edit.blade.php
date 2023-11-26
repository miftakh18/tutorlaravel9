<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <form action="{{ route('update', $student) }}" method="post">
        @csrf
        @method('patch')
        {{-- cek model fillabelnya nyala ga --}}
        <input type="text" name="name" placeholder="Nama" value="{{ $student->name }}">
        <input type="number" name="score" placeholder="score" value="{{ $student->score }}">
        <button type="submit">update</button>
    </form>

</body>

</html>
