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
        $datosEmpleados = request()->all();
        return response()->json($datosEmpleados);
    }
}
