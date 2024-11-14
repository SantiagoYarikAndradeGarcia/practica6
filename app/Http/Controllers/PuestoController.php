<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'idPuesto'    =>['required'],
            'nombre'    =>['required'],
            'tipo' =>['required'],
        ];
    }

    public function index()
    {
        $puestos= Puesto::paginate(5);
        return view("Puestos/index",compact("puestos"));
    }


    public function create()
    {
        $puestos= Puesto::paginate(5); 
        $puesto=new Puesto;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Puestos/frm",compact("puestos",'puesto',"accion",'txtbtn','des','iddes'));
    }

 
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Puesto::create($val);
        return redirect()->route('Puestos.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos=Puesto::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Puestos.show",compact('puestos','puesto','accion','txtbtn','des'));
    }

   
    public function edit(Puesto $puesto)
    {
        $puestos=Puesto::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Puestos.frm",compact('puestos','puesto','accion','txtbtn','des','iddes'));
    }

    
    public function update(Request $request, Puesto $puesto)
    {
        $val= $request->validate($this->val);
        $puesto->update($val);
        return redirect()->route('Puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('Puestos.index');
    }
}
