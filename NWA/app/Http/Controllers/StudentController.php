<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;


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
        /*$request->validate([
            'alumn_DNI'=>'required|string|max:4',
            'nombre'=>'required|string|max:255',
            'apellido'=>'required|string|max:255',
            'fecha_nac'=>'required|date',
        ]);
        //Creo una instancia de alumno con los datos recibidos

        *FORMA 1*

        /*$student = new Student();
        $student->alumn_DNI = $request->alumn_DNI;
        $student->nombre=$request->nombre;
        $student->apellido = $request->apellido;
        $student->fecha_nac = $request->fecha_nac;

        //guardo los datos en la BD
        $student->save();*/


        // *FORMA 2*

        /*Student::create([
            'alumn_DNI'=>$request->alumn_DNI,
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'fecha_nac'=>$request->fecha_nac
        ]);
        
        *FORMA 3*

        $student= Student::create($request->all());*/

        // *FORMA 4* 

        DB::table('student')->insert(
            array(
                'alumn_DNI'=>$request->alumn_DNI,
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'fecha_nac'=>$request->fecha_nac
            )
        );
    
    }

    public function viewDelete(){
        return view('alumnos.delete');
    }

    public function delete($id){
        
        $student = Student::find($id);
        if($student){
            $student->delete();
        }


        /*
        **FORMA 2**
        DB::table('student')->where('id', '=', $id)->delete();
        */

        /*
        **FORMA 3**



        */


    }

}