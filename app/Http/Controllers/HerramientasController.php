<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $herramientas = Herramienta::all();

        //dd($herramientas);
        return view('activos.herramientas.page', compact('herramientas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activos.herramientas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|max:255',
            'serial' => 'required|unique:herramienta',
            'categoria' => 'required',
        ]);

        $herramienta = new Herramienta;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->serial = $request->serial;
        $herramienta->categoria = $request->categoria;
        $herramienta->save();

        return redirect()->route('herramientas.index')->with('status', 'se ha creado la herramienta satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Herramienta $herramienta)
    {
        return view('activos.herramientas.show', compact('herramienta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Herramienta $herramienta)
    {
        //dd($herramienta);

        return view('activos.herramientas.edit', compact('herramienta'));
        //  return redirect()->route('herramientas.index')->with('status','se ha creado la herramienta satisfactoriamente');


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Herramienta $herramienta)
    {
        $request->validate([
            'descripcion' => 'required|max:255',
            'serial' => 'required|unique:herramienta',
            'categoria' => 'required',
        ]);
        $herramienta->descripcion = $request->descripcion;
        $herramienta->serial = $request->serial;
        $herramienta->categoria = $request->categoria;
        $herramienta->save();
        return redirect()->action([HerramientasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Herramienta $herramienta)
    {
        //
    }
}
