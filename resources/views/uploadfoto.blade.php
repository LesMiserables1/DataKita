<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/upload/foto" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="file" name="foto[]" id="" accept="image/*" multiple required>
    <input type="text" name="caption" id="" required>
    <input type="submit">
    <select name="jenis" id="jenis">
        <option value="Agraria">Agraria</option>
        <option value="Kehutanan">Kehutanan</option>
    </select>
    </form>
</body>
</html>