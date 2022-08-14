<?php

namespace App\Http\Controllers;

Use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /* Metodo para listar registros */
    public function index()
    {
        $datos['empleados']=Empleado::paginate();
        return view('empleados.index', $datos);
    }

    /* Metodo para crear registros */
    public function create()
    {
        return view('empleados.create');
    }

    public function edit($id)
    {
        $empleado=Empleado::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    public function store(Request $request)
    {
        $datosEmpleados = request()->except('_token');
        /* Insertar datos en el modelo */
        Empleado::insert($datosEmpleados);
        return response()->json($datosEmpleados);
    }

    /* Metodo para eliminar registros */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados');
    }

    /* Metodo para actualizar registros */
    public function update(Request $request, $id)
    {
        $datosEmpleados = request()->except(['_token', '_method']);
        Empleado::where('id','=',$id)->update($datosEmpleados);

        $empleado=Empleado::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }
}
