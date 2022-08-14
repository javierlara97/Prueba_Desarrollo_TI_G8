<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>CEDULA</th>
            <th>NOMBRE(S)</th>
            <th>APELLIDOS</th>
            <th>EDAD</th>
            <th>CARGO</th>
            <th>CELULAR</th>
            <th>ACCIÓN</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->cedula }}</td>
            <td>{{ $empleado->nombres }}</td>
            <td>{{ $empleado->apellidos }}</td>
            <td>{{ $empleado->edad }}</td>
            <td>{{ $empleado->cargo }}</td>
            <td>{{ $empleado->nocelular }}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table> 