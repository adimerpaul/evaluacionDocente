<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Http\Requests\StoreRespuestaRequest;
use App\Http\Requests\UpdateRespuestaRequest;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreRespuestaRequest $request)
    {
        //
    }


    public function resumenDocente(){
        return DB::SELECT("SELECT
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=1) p1,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=2) p2,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=3) p3,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=4) p4,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=5) p5,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=6) p6,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=7) p7,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=8) p8,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=9) p9,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=10) p10,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=11) p11,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=12) p12,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=13) p13,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=14) p14,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=15) p15,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=16) p16,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=17) p17,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=18) p18,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=19) p19,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=20) p20,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=21) p21,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=22) p22,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=23) p23,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=24) p24,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=25) p25,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=26) p26,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=27) p27,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=28) p28,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=29) p29,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=30) p30,
            (select r.valor from respuestas r where r.formulario_id=r1.formulario_id and r.pregunta_id=31) p31
            from respuestas r1 where r1.docente_materia_id=1;
        ");
    }
    /**
     * Display the specified resource.
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRespuestaRequest $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
