<?php

namespace App\Http\Controllers;

Use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return view('empleados.index');
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $datosEmpleados = request()->except('_token');
        /* Insertar datos en el modelo */
        Empleado::insert($datosEmpleados);
        return response()->json($datosEmpleados);
    }
}
