<!-- Formulario para creación empleados -->
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="number" name="cedula" placeholder="Número de Cedula"></input>
    <input type="text" name="nombres" placeholder="Nombre(s)"></input>
    <input type="text" name="apellidos" placeholder="Apellido"></input>
    <input type="number" name="edad" placeholder="Edad"></input>
    <input type="text" name="cargo" placeholder="Cargo"></input>
    <input type="number" name="nocelular" placeholder="Nro Celular"></input>

<input type="submit" value="Guardar"></input>

</form>