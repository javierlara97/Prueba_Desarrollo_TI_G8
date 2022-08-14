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
            <td>Editar | 
                <form action="{{ url('/empleados/'.$empleado->id) }}" method="post">
                    @csrf
                    {{  method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Segur de borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 