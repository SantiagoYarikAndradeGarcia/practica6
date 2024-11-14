<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'nombreEdificio' =>['required'],
            'nombreCorto' =>['required']
        ];
    }

    public function index()
    {
        $edificios= Edificio::paginate(5);
        return view("Edificios/index",compact("edificios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edificios= Edificio::paginate(5); 
        $edificio=new Edificio;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Edificios/frm",compact("edificios",'edificio',"accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Edificio::create($val);
        return redirect()->route('Edificios.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Edificio $edificio)
    {
        $edificios=Edificio::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Edificios.show",compact('edificios','edificio','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edificio $edificio)
    {
        $edificios=Edificio::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Edificios.frm",compact('edificios','edificio','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edificio $edificio)
    {
        $val= $request->validate($this->val);
        $edificio->update($val);
        return redirect()->route('Edificios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route('Edificios.index');
    }
}
