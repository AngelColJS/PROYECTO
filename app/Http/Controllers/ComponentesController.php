<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $component = Componentes::all(); 

        return view ('Componentes/list', compact('component'));
    }

    public function editar($id){
    $component = Componentes::findOrFail($id); 
    return view ('Componentes/editar', compact('component'));
    }
    public function borrar($id){
        $component = Componentes::find($id);
        $component->delete();
        return redirect('Componentes/list');
       }
    public function create()
    {
        return view('Componentes/registro');
    }
    public function guardar(Request $request)
    {
        $component = new Componentes();
        $component->nombre = $request->nombre;
        $component->precio = $request->precio;
        $component->descripcion = $request->descripcion;
        $component->cantidad = $request->cantidad;
        $component->save();
        return redirect('Componentes/list');
    }
public function updatee(request $request, Componentes $component)
 {
    $component->nombre = $request->nombre;
    $component->precio = $request->precio;
    $component->descripcion = $request->descripcion;
    $component->cantidad = $request->cantidad;

     $component->save();
     return redirect('Componentes/list');
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
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function show(Componentes $componentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Componentes $componentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Componentes $componentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Componentes $componentes)
    {
        //
    }
}
