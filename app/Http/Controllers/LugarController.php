<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Edificio;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'nombreLugar' =>['required'],
            'nombreCorto' =>['required'],
            'edificio_id' =>['required']
        ];
    }

    public function index()
    {
        $lugares= Lugar::with('edificio')->paginate(5);
        $edificios = Edificio::get();
        return view("Lugares/index",compact("lugares","edificios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edificios = Edificio::all();
        $lugares= Lugar::paginate(5); 
        $lugar=new Lugar;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Lugares/frm",compact("lugares",'lugar',"edificios","accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Lugar::create($val);
        return redirect()->route('Lugares.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lugar $lugar)
    {
        $edificios = Edificio::all();
        $lugares=Lugar::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Lugares.show",compact('lugares','lugar','edificios','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lugar $lugar)
    {
        $edificios = Edificio::all();
        $lugares=Lugar::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Lugares.frm",compact('lugares','lugar','edificios','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lugar $lugar)
    {
        $val= $request->validate($this->val);
        $lugar->update($val);
        return redirect()->route('Lugares.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        return redirect()->route('Lugares.index');
    }
}
