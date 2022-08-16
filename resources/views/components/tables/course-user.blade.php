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
            <td scope="col"><img src="{{asset($user->img)}}" height="80px" width="70px" alt=""></td>
            <td scope="col">{{$user->name}}</td>
            <td scope="col">{{$user->apellidoP}}</td>
            <td scope="col">{{$user->apellidoM}}</td>
            <td scope="col">{{$user->email}}</td>
            <td scope="col" class="text-start">
                <ul>
                    @if ($user->courses->count() > 0) {{-- Si el usuario tiene mas de 0 curso entonces los recorremos --}}
                    @foreach ($user->courses as $course)
                    <li>{{$course->name}}</li>
                    @endforeach
                    @else {{-- Si el usuario no tiene cursos entonces en su lugar imprimira --}}
                    <li>No hay cursos</li>
                    @endif
                </ul>
            </td>
            {{-- Si el usuario tiene status activo encontes mostrara activo en verde y si no inactivo en rojo --}}
            <td scope="col" @class(['text-success'=> $user->status, 'text-danger' =>
                !$user->status])>{{$user->status ? 'Activo' : 'Inactivo'}}</td>
        </tr>
        @endforeach
    </tbody>
</table> 