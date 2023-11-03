<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
</head>
<body>
    <div class="content">
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('users.deleteUser')}}">Eliminar datos</a></li>
            <li><a href="{{route('users.updateUser')}}">Actualizar datos</a></li>
        </ul>
    </div>
</body>
</html>
