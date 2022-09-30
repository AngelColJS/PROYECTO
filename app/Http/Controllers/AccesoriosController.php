<?php

namespace App\Http\Controllers;

use App\Models\Accesorios;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
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
        $accesorio = Accesorios::all(); 

        return view ('Accesorios/list', compact('accesorio'));
    }

    public function editar($id){
    $accesorio = Accesorios::findOrFail($id); 
    return view ('Accesorios/editar', compact('accesorio'));
    }
    public function borrar($id){
        $accesorio = Accesorios::find($id);
        $accesorio->delete();
        return redirect('Accesorios/list');
       }
    public function create()
    {
        return view('Accesorios/registro');
    }
    public function guardar(Request $request)
    {
        $accesorio = new Accesorios();
        $accesorio->nombre = $request->nombre;
        $accesorio->precio = $request->precio;
        $accesorio->descripcion = $request->descripcion;
        $accesorio->cantidad = $request->cantidad;
        $accesorio->save();
        return redirect('Accesorios/list');
    }
public function updatee(request $request, Accesorios $accesorio)
 {
    $accesorio->nombre = $request->nombre;
    $accesorio->precio = $request->precio;
    $accesorio->descripcion = $request->descripcion;
    $accesorio->cantidad = $request->cantidad;

     $accesorio->save();
     return redirect('Accesorios/list');
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
     * @param  \App\Models\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function show(Accesorios $accesorios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesorios $accesorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesorios $accesorios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesorios $accesorios)
    {
        //
    }
}
