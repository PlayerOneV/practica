<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Usuarios-Cursos</title>
</head>

<body>
    <div class="container mb-4 mt-5">
        <form action="{{route('users.index')}}" method="get">
            <div>
                <input type="text" name="buscar" placeholder="Introduce tu busqueda">
                <input type="submit" value="Buscar">
            </div>
        </form>
    </div>
</body>

</html>