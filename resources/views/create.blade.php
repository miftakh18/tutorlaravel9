<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <form action="{{ route('store') }}" method="post">
        @csrf
        {{-- cek model fillabelnya nyala ga --}}
        <input type="text" name="name" placeholder="Nama">
        <input type="number" name="score" placeholder="score">
        <button type="submit">Add</button>
    </form>
</body>

</html>
