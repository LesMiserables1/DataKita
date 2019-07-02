<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="/upload/foto" enctype="multipart/form-data">
    @csrf
    <input type="file" name="foto[]" id="" accept="image/*">
    <input type="text" name="caption" id="">
    </form>
</body>
</html>