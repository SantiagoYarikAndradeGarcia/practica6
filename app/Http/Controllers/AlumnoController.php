<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'noctrl'    =>['required','min:8','max:8'],
            'nombre'    =>['required','min:3'],
            'apellidoP' =>['required'],
            'apellidoM' =>['required'],
            'sexo'     =>['required'],
            'email'     =>['required'],
            'carrera_id' =>['required']
        ];
    }

    public function index()
    {
        $alumnos= Alumno::with('carrera')->paginate(5);
        $carreras = Carrera::get();
        return view("Alumnos2/index",compact("alumnos","carreras"));
    }

    public function create()
    {
        $carreras = Carrera::all();
        $alumnos= Alumno::paginate(5); 
        $alumno=new Alumno;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Alumnos2/frm",compact("alumnos",'alumno',"carreras","accion",'txtbtn','des','iddes'));
    }

   
    public function store(Request $request)
    {
        
       $val= $request->validate($this->val);
        Alumno::create($val);
        return redirect()->route('Alumnos2.index')->with("mensaje",'se inserto correctamente.');
    }

 
    public function show(Alumno $alumno)
    {
        $carreras = Carrera::all();
        $alumnos=Alumno::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Alumnos2.show",compact('alumnos','alumno','carreras','accion','txtbtn','des'));
    }

  
    public function edit(Alumno $alumno)
    {   
        $carreras = Carrera::all();
        $alumnos=Alumno::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Alumnos2.frm",compact('alumnos','alumno','carreras','accion','txtbtn','des','iddes'));
    }

  
    public function update(Request $request, Alumno $alumno)
    {   
        //LO QUE SE DA VALIDADO SE GRABA
        $val= $request->validate($this->val);
        $alumno->update($val);
        return redirect()->route('Alumnos2.index');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('Alumnos2.index');
    }
}
