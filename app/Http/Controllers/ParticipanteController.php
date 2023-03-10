<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participante;
use App\LibroParticipante;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $participantes = Participante::all();
        //foreach($participantes as $participante)
        //{
            //$participante=LibroParticipante::where('participante_id', '=', $participante)->get(); 
            //dd($participante->archivo);
        //}
        
        // dd($participantes);
        return view ('listado', compact('participantes'));
       // return view ('libro', compact('libro_participante');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Debe recibir el id del participante
    public function create($id)
    {
        // dd($id);
        // Se realiza la búsqueda del libro específico del participante

        $libro_participante = LibroParticipante::where('id', $id)->get();
        // dd($libro_participante);
        //dd($participantes);
        return view('capturajurado', compact('libro_participante'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
