<?php

namespace App\Http\Controllers;

use App\Models\docenteMateria;
use App\Http\Requests\StoredocenteMateriaRequest;
use App\Http\Requests\UpdatedocenteMateriaRequest;
use Illuminate\Http\Request;

class DocenteMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return DocenteMateria::with('docente')->with('materia')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredocenteMateriaRequest $request)
    {
        //
        if(DocenteMateria::where('docente_id',$request->docente_id)->where('materia_id',$request->materia_id)->where('gestion',$request->gestion)->where('paralelo',$request->paralelo)->count()>0)
            return false;

        $docenteMateria=new DocenteMateria;
        $docenteMateria->docente_id=$request->docente_id;
        $docenteMateria->materia_id=$request->materia_id;
        $docenteMateria->paralelo=$request->paralelo;
        $docenteMateria->gestion=$request->gestion;
        $docenteMateria->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(docenteMateria $docenteMateria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docenteMateria $docenteMateria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedocenteMateriaRequest $request, docenteMateria $docenteMateria)
    {
        //
        $docenteMateria=DocenteMateria::find($request->id);
        $docenteMateria->docente_id=$request->docente_id;
        $docenteMateria->materia_id=$request->materia_id;
        $docenteMateria->paralelo=$request->paralelo;
        $docenteMateria->gestion=$request->gestion;
        $docenteMateria->save();
    }


    public function cambioCodigo(Request $request){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Caracteres permitidos
        $codigo = '';

        for ($i = 0; $i < 4; $i++) {
            $codigo .= $characters[rand(0, strlen($characters) - 1)];
        }

        $docenteMateria = DocenteMateria::find($request->id);
        $docenteMateria->codigo = $codigo;
        $docenteMateria->activo = 'ACTIVO';
        $docenteMateria->save();
    }
    public function bajaEvaluacion(Request $request){
        $docenteMateria=DocenteMateria::find($request->id);
        $docenteMateria->codigo='';
        $docenteMateria->activo='INACTIVO';
        $docenteMateria->save();
    }

    public function cambioEstado(Request $request){
        $docenteMateria=DocenteMateria::find($request->id);
        if($docenteMateria->activo=='ACTIVO')
            $docenteMateria->activo='INACTIVO';
        else
            $docenteMateria->activo='ACTIVO';
        $docenteMateria->save();

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(docenteMateria $docenteMateria)
    {
        //
    }
}
