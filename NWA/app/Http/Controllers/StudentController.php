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
}
