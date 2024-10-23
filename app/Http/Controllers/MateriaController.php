<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Reticula;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'idMateria'    =>['required','min:10','max:10'],
            'nombreMateria'    =>['required'],
            'nombreMediano' =>['required'],
            'nombreCorto' =>['required'],
            'nivel' =>['required'],
            'modalidad' =>['required'],
            'reticula_id' =>['required']
        ];
    }

    public function index()
    {
        $materias= Materia::with('reticula')->paginate(5);
        $reticulas = Reticula::get();
        return view("Materias/index",compact("materias","reticulas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reticulas = Reticula::all();
        $materias= Materia::paginate(5); 
        $materia=new Materia;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Materias/frm",compact("materias",'materia',"reticulas","accion",'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Materia::create($val);
        return redirect()->route('Materias.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        $reticulas = Reticula::all();
        $materias=Materia::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Materias.show",compact('materias','materia','reticulas','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        $reticulas = Reticula::all();
        $materias=Materia::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("Materias.frm",compact('materias','materia','reticulas','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $val= $request->validate($this->val);
        $materia->update($val);
        return redirect()->route('Materias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('Materias.index');
    }
}
