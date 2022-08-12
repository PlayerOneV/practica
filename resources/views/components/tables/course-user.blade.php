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