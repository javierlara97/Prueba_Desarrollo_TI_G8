
@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ url('empleados/create') }}">Registrar nuevo empleado</a>
@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

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
        <!-- Obtener los datos de la BD y listarlos -->
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->cedula }}</td>
            <td>{{ $empleado->nombres }}</td>
            <td>{{ $empleado->apellidos }}</td>
            <td>{{ $empleado->edad }}</td>
            <td>{{ $empleado->cargo }}</td>
            <td>{{ $empleado->nocelular }}</td>
            <td>
                <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar</a>
                |
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

</div>
@endsection