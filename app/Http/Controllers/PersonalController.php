<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Puesto;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'RFC'    =>['required','min:13'],
            'nombres' =>['required'],
            'apellidoP' =>['required'],
            'apellidoM' =>['required'],
            'licenciatura' =>[],
            'licPasTit' =>['required'],
            'especializacion' =>[],
            'espPasTit' =>['required'],
            'maestria' =>[],
            'maePasTit' =>['required'],
            'doctorado' =>[],
            'docPasTit' =>['required'],
            'fechaIngSep' =>['required'],
            'fechaIngIns' =>['required'],
            'depto_id' =>['required'],
            'puesto_id' =>['required'],
        ];
    }

    public function index()
    {
        //$personals= Personal::with('depto')->paginate(5);
        $personals= Personal::with(['depto', 'puesto'])->paginate(5);
        $deptos = Depto::get();
        $puestos = Puesto::get();
        return view("Personales/index",compact("personals","deptos","puestos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puestos = Puesto::all();
        $deptos = Depto::all();
        $personals= Personal::paginate(5); 
        $personal=new Personal;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        $checked='checked';
        return view("Personales/frm",compact("personals",'personal',"deptos","puestos","accion",'txtbtn','des','iddes','checked'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Personal::create($val);
        return redirect()->route('Personales.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        $deptos = Depto::all();
        $puestos = Puesto::all();
        $personals=Personal::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Personales.show",compact('personals','personal','deptos','puestos','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        $deptos = Depto::all();
        $puestos = Puesto::all();
        $personals=Personal::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        $checked='';
        return view("Personales.frm",compact('personals','personal','deptos','puestos','accion','txtbtn','des','iddes','checked'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $val= $request->validate($this->val);
        $personal->update($val);
        return redirect()->route('Personales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('Personales.index');
    }
}
