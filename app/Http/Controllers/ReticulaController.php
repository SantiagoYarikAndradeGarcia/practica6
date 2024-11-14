<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use App\Models\Carrera;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            // 'idReticula'    =>['required','min:15','max:15'],
            'descripcion'    =>['required'],
            'fechaEnVigor' =>['required'],
            'carrera_id' =>['required']

        ];
    }

    public function index()
    {
        $reticulas= Reticula::with('carrera')->paginate(5);
        $carreras = Carrera::get();
        return view("Reticulas/index",compact("reticulas","carreras"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        $reticulas= Reticula::paginate(5); 
        $reticula=new Reticula;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Reticulas/frm",compact("reticulas",'reticula',"carreras","accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Reticula::create($val);
        return redirect()->route('Reticulas.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reticula $reticula)
    {
        $carreras = Carrera::all();
        $reticulas=Reticula::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Reticulas.show",compact('reticulas','reticula','carreras','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reticula $reticula)
    {
        $carreras = Carrera::all();
        $reticulas=Reticula::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Reticulas.frm",compact('reticulas','reticula','carreras','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reticula $reticula)
    {
        $val= $request->validate($this->val);
        $reticula->update($val);
        return redirect()->route('Reticulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route('Reticulas.index');
    }
}
