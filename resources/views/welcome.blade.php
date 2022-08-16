<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!-- Hacemos referencia a nuestro archivo para utilizar bootstrap -->

    <title>Usuarios-Cursos</title>
</head>

<body>
    <div class="container mb-4 mt-5">
        <!-- Le indicamos al formulario que al submit se dirigira a la ruta con name users.index-->
        <form action="{{route('users.index')}}" method="get"> 
            <div>
                <!-- Utilizaremos el atributo name del input text para recuperar el valor después -->
                <input type="text" name="buscar" placeholder="Introduce tu busqueda">
                <input type="submit" value="Buscar">
            </div>
        </form>
    </div>
</body>

</html>