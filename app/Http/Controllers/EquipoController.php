<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Sistema;
use App\Models\TipoEquipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::get();



        return view('activos.equipos.page', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sistemas = Sistema::get();
        $tiposequipos = TipoEquipo::get();
        //dd($tiposequipos);
        return view('activos.equipos.create', compact('sistemas',
        'tiposequipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return view('activos.equipos.show', compact('equipo'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
