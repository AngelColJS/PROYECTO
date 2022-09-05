<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
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
        $product = Productos::all(); 

        return view ('Productos/list', compact('product'));
    }

    public function editar($id){
    $product = Productos::findOrFail($id); 
    return view ('Productos/editar', compact('product'));
    }
    public function borrar($id){
        $product = Productos::find($id);
        $product->delete();
        return redirect('Productos/list');
       }
    public function create()
    {
        return view('Productos/registro');
    }
    public function guardar(Request $request)
    {
        $producto = new productos();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect('Productos/list');
    }
public function updatee(request $request, Productos $product)
 {
    $product->nombre = $request->nombre;
    $product->precio = $request->precio;
    $product->descripcion = $request->descripcion;
    $product->cantidad = $request->cantidad;

     $product->save();
     return redirect('Productos/list');
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
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
