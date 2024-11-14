<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'horaIni' =>['required','min:5'],
            'horaFin' =>['required','min:5'],
        ];
    }

    public function index()
    {
        $horas= Hora::paginate(5);
        return view("Horas/index",compact("horas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horas= Hora::paginate(5); 
        $hora=new Hora;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Horas/frm",compact("horas",'hora',"accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Hora::create($val);
        return redirect()->route('Horas.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hora $hora)
    {
        $horas=Hora::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Horas.show",compact('horas','hora','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $hora)
    {
        $horas=Hora::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Horas.frm",compact('horas','hora','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $hora)
    {
        $val= $request->validate($this->val);
        $hora->update($val);
        return redirect()->route('Horas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route('Horas.index');
    }
}
