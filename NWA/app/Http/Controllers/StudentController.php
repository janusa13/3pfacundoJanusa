<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        $alumnos = Student::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function indexJson(){
        $alumnos = student::all();
        return response()->json($alumnos);
    }

    public function form(){
        return view('alumnos.form');
    }

    public function store(Request $request){

        //aca voy a validar los datos
        $request->validate([
            'alumn_DNI'=>'required|string|max:255',
            'nombre'=>'required|string|max:255',
            'apellido'=>'required|string|max:255',
            'fecha_nac'=>'required|date',
        ]);
        //Creo una instancia de alumno con los datos recibidos
        $student = new Student();
        $student->alumn_DNI = $request->alumn_DNI;
        $student->nombre=$request->nombre;
        $student->apellido = $request->apellido;
        $student->fecha_nac = $request->fecha_nac;

        //guardo los datos en la BD
        $student->save();
        return redirect()->back()->with('success', 'Estudiante registrado correctamente.');
    }


}
