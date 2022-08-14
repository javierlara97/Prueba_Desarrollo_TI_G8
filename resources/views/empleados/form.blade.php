<input type="number" name="cedula" value="{{ 
    isset($empleado->cedula)?$empleado->cedula:'' 
}}" placeholder="Número de Cedula"></input>
<input type="text" name="nombres" value="{{ 
    isset($empleado->nombres)?$empleado->nombres:'' 
 }}" placeholder="Nombre(s)"></input>
<input type="text" name="apellidos" value="{{ 
    isset($empleado->apellidos)?$empleado->apellidos:'' 
 }}" placeholder="Apellido"></input>
<input type="number" name="edad" value="{{ 
    isset($empleado->edad)?$empleado->edad:'' 
 }}" placeholder="Edad"></input>
<input type="text" name="cargo" value="{{ 
    isset($empleado->cargo)?$empleado->cargo:'' 
 }}" placeholder="Cargo"></input>
<input type="number" name="nocelular" value="{{ 
    isset($empleado->nocelular)?$empleado->nocelular:'' 
 }}" placeholder="Nro Celular"></input>

<input type="submit" value="Guardar"></input>

<a href="{{ url('empleados/') }}">Regresar</a>

