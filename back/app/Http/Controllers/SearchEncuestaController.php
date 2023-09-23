<?php

namespace App\Http\Controllers;

use App\Models\Conocimiento;
use App\Models\DocenteMateria;
use Illuminate\Http\Request;

class SearchEncuestaController extends Controller{
    public function search(Request $request){
        $search = $request->search;
        $encuesta = DocenteMateria::where('codigo',$search)->first();
        if ($encuesta == null) {
            return response()->json([
                'message' => 'No se encontro la encuesta',
                'status' => 404
            ], 404);
        }
        $encuesta = DocenteMateria::where('codigo',$search)
            ->with(['docente','materia'])
            ->whereId($encuesta->id)
            ->first();
        $conocimientos = Conocimiento::
            with(['usos.preguntas.respuestas'])
            ->get();
        return response()->json([
            'encuesta' => $encuesta,
            'conocimientos' => $conocimientos,
            'status' => 200
        ], 200);
    }
}
