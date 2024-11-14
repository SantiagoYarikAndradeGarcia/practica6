<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Models\PersonalPlaza;

class PersonalPlazaController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'tipoNombramiento'    =>['required'],
            'plaza_id' =>['required'],
            'personal_id' =>['required']

        ];
    }

    public function index()
    {
        // $reticulas= Reticula::with('carrera')->paginate(5);
        $personalplazas= PersonalPlaza::with(['plaza', 'personal'])->paginate(5);
        $plazas = Plaza::get();
        $personals = Personal::get();
        return view("PersonalPlazas/index",compact("personalplazas","plazas","personals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas = Plaza::all();
        $personals = Personal::all();
        $personalplazas= PersonalPlaza::paginate(5); 
        $personalplaza=new PersonalPlaza;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("PersonalPlazas/frm",compact("personalplazas",'personalplaza',"plazas","personals","accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        PersonalPlaza::create($val);
        return redirect()->route('PersonalPlazas.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalPlaza $personalplaza)
    {
        $plazas = Plaza::all();
        $personals = Personal::all();
        $personalplazas=PersonalPlaza::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("PersonalPlazas.show",compact('personalplazas','personalplaza','plazas','personals','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalPlaza $personalplaza)
    {
        $plazas = Plaza::all();
        $personals = Personal::all();
        $personalplazas=PersonalPlaza::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("PersonalPlazas.frm",compact('personalplazas','personalplaza','plazas','personals','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalPlaza $personalplaza)
    {
        $val= $request->validate($this->val);
        $personalplaza->update($val);
        return redirect()->route('PersonalPlazas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalPlaza $personalplaza)
    {
        $personalplaza->delete();
        return redirect()->route('PersonalPlazas.index');
    }
}
