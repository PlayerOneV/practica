<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <title>Usuarios-Cursos</title>
</head>

<body>
    <div class="container text-center">
        <h1 class="mb-5 fst-italic">Bienvenido</h1>

        <table class="table">
            <thead>
                <!-- Primera fila de la tabla que contendra el encabezado -->
                <tr scope="row" class="text-center fst-italic">
                    <th scope="col">Image</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cursos</th>
                    <th scope="col">Estatus</th>
                </tr>
            </thead>
            <tbody>
                <!-- Las siguientes filas son creadas mediante bucles para llenar las columnas -->
                @foreach ($users as $user)
                <tr scope="row" class="text-center align-middle fst-italic">
                    <td scope="col">{{$user->img}}</td>
                    <td scope="col">{{$user->name}}</td>
                    <td scope="col">{{$user->apellidoP}}</td>
                    <td scope="col">{{$user->apellidoM}}</td>
                    <td scope="col">{{$user->email}}</td>
                    <td scope="col" class="text-start">
                        <ul>
                            @if ($user->courses->count() > 0)
                            @foreach ($user->courses as $course)
                            <li>{{$course->name}}</li>
                            @endforeach
                            @else
                            <li>No hay cursos</li>
                            @endif
                        </ul>
                    </td>
                    <td scope="col" @class(['text-success'=> $user->status, 'text-danger' =>
                        !$user->status])>{{$user->status ? 'Activo' : 'Inactivo'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>