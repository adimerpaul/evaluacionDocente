<?php

namespace App\Http\Controllers;

use App\Models\DocenteMateria;
use App\Models\Formulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FormularioController extends Controller
{
    public function store(Request $request)
    {
        // Verificar si el usuario ya ha enviado un formulario
        if (session()->has('formulario_enviado')) {
            return response()->json([
                'message' => 'Ya se ha enviado un formulario previamente.'
            ], 400);
        }

        // Registrar que el formulario ha sido enviado
        session(['formulario_enviado' => true]);

        // Verificar si la asignación está activa
        $docenteMateria = DocenteMateria::find($request->asignacion['id']);
        if ($docenteMateria->activo == 'INACTIVO') {
            return response()->json([
                'message' => 'El docente no está activo.'
            ], 400);
        }

        // Crear y guardar el formulario
        $formulario = new Formulario();
        $formulario->date = now();
        $formulario->time = now();
        $formulario->carrera = $request->carrera;
        $formulario->departamento = "";
        $formulario->mension = $request->mension;
        $formulario->docente_materia_id = $request->asignacion['id'];
        $formulario->save();

        // Guardar respuestas
        foreach ($request->respuestas as $respuesta) {
            $formulario->respuestas()->create([
                'pregunta_id' => $respuesta['id'],
                'docente_materia_id' => $request->asignacion['id'],
                'respuesta' => $respuesta['textRespuesta'],
            ]);
        }

        return response()->json([
            'message' => 'Formulario enviado correctamente.'
        ], 200);
    }
}
