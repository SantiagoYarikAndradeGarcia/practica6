<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'idCarrera'    =>['required','min:15','max:15'],
            'nombreCarrera' =>['required','min:8'],
            'nombreMediano' =>['required'],
            'nombreCorto' =>['required'],
            'depto_id' =>['required']
        ];
    }

    public function index()
    {
        $carreras= Carrera::with('depto')->paginate(5);
        $deptos = Depto::get();
        return view("Carreras/index",compact("carreras","deptos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deptos = Depto::all();
        $carreras= Carrera::paginate(5); 
        $carrera=new Carrera;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Carreras/frm",compact("carreras",'carrera',"deptos","accion",'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Carrera::create($val);
        return redirect()->route('Carreras.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        $deptos = Depto::all();
        $carreras=Carrera::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Carreras.show",compact('carreras','carrera','deptos','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        $deptos = Depto::all();
        $carreras=Carrera::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("Carreras.frm",compact('carreras','carrera','deptos','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $val= $request->validate($this->val);
        $carrera->update($val);
        return redirect()->route('Carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('Carreras.index');
    }
}
