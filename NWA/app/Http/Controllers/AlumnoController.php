<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function indexJson(){
        $alumnos = Alumno::all();
        return response()->json($alumnos);
    }

    public function store(Request $request){
        $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha_nac' => 'required|date'
        ]);
        $alumno = new Alumno();
        $alumnmo->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->fecha_nac = $request->input('fecha_nac');

        $alumno->save();

        return response()->json($alumno, 201);
    }
}
