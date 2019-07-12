<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/upload/video" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="video" id="" accept="video/*">
        <input type="text" placeholder="caption" name="caption" required>
        <input type="text" placeholder="title" name="title" required>
        <input type="text" placeholder="description" name="description" required>
        <select name="jenis" id="jenis">
                <option value="Agriculture_Mining">Agriculture&Mining</option>
                <option value="Social_Population">Social&Population</option>
                <option value="Economic_Trade">Economic&Trade</option>
        </select>
        <input type="submit" value="kirim">

    </form>
</body>
</html>