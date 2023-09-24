<?php

namespace App\Http\Controllers;

use App\Models\Conocimiento;
use App\Models\DocenteMateria;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class SearchEncuestaController extends Controller{
    public function search(Request $request){
        $search = $request->search;
        $asignacion = DocenteMateria::where('codigo',$search)->first();
        if ($asignacion == null) {
            return response()->json([
                'message' => 'No se encontro la encuesta',
                'status' => 404
            ], 404);
        }
        $asignacion = DocenteMateria::where('codigo',$search)
            ->with(['docente','materia'])
            ->whereId($asignacion->id)
            ->first();
        $conocimientos = Pregunta::
            with(['uso.conocimiento','respuestas'])
            ->get();
        return response()->json([
            'asignacion' => $asignacion,
            'conocimientos' => $conocimientos,
            'status' => 200
        ], 200);
    }
}
