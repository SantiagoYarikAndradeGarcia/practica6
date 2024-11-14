<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            // 'idPeriodo'    =>['required','min:5','max:5'],
            'periodo' =>['required'],
            'descCorta' =>['required'],
            'fechaIni' =>['required'],
            'fechaFin' =>['required']
        ];
    }

    public function index()
    {
        $periodos= Periodo::paginate(5);
        return view("Periodos/index",compact("periodos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodos= Periodo::paginate(5); 
        $periodo=new Periodo;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        $iddes='';
        return view("Periodos/frm",compact("periodos",'periodo',"accion",'txtbtn','des','iddes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Periodo::create($val);
        return redirect()->route('Periodos.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Periodos.show",compact('periodos','periodo','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        $iddes='disabled';
        return view("Periodos.frm",compact('periodos','periodo','accion','txtbtn','des','iddes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $val= $request->validate($this->val);
        $periodo->update($val);
        return redirect()->route('Periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('Periodos.index');
    }
}
