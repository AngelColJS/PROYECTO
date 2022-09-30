<?php

namespace App\Http\Controllers;

use App\Models\Accesorios;
use App\Models\Componentes;
Use App\Models\Compras;
use App\Models\Detalles;
use App\Models\Productos;
use Illuminate\Http\Request;


class ComprasController extends Controller
{
    public function list()
    {
        $compras = Compras::all(); 

        return view ('Compras/list', compact('compras'));
    }

    public function editar($id){
    $compras = Compras::findOrFail($id); 
    return view ('Compras/editar', compact('compras'));
    }
    public function borrar($id){
        $compras = Compras::find($id);
        $compras->delete();
        return redirect('Compras/list');
       }

    public function create()
    {
        return view('Compras/registro');
    }
    public function guardar(Request $request)
    {
        $compras = new compras();
        $compras->nit = $request->nit;
        $compras->nombre = $request->nombre;
        $compras->direccion = $request->direccion;
        $compras->fecha = $request->fecha;
        $compras->estado = "activo";
        $compras->save();
        return redirect('Compras/list');
    }
    public function updatee(request $request, Compras $compras)
 {
    $compras->nit = $request->nit;
    $compras->nombre = $request->nombre;
    $compras->direccion = $request->direccion;
    $compras->fecha = $request->fecha;
    $compras->estado = "activo";

     $compras->save();
     return redirect('Compras/list');
 }

 public function agregar()
    {
    
    $productos = Productos::all();
    $componentes = Componentes::all();
    $accesorios = Accesorios::all();
    return view ('Compras/agregar', compact('productos', 'componentes', 'accesorios'));
    }

}
