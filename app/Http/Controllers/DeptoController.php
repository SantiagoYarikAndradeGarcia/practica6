<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'idDepto'    =>['required','min:2','max:2'],
            'nombreDepto' =>['required','min:5'],
            'nombreMediano' =>['required'],
            'nombreCorto' =>['required']
        ];
    }

    public function index()
    {
        $deptos= Depto::paginate(5);
        return view("Deptos/index",compact("deptos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deptos= Depto::paginate(5); 
        $depto=new Depto;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Deptos/frm",compact("deptos",'depto',"accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Depto::create($val);
        return redirect()->route('Deptos.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depto $depto)
    {
        $deptos=Depto::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Deptos.show",compact('deptos','depto','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depto $depto)
    {
        $deptos=Depto::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Deptos.frm",compact('deptos','depto','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depto $depto)
    {
        $val= $request->validate($this->val);
        $depto->update($val);
        return redirect()->route('Deptos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depto $depto)
    {
        $depto->delete();
        return redirect()->route('Deptos.index');
    }
}
