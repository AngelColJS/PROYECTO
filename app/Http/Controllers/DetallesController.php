<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use App\Models\Detalles;
use App\Models\Productos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class DetallesController extends Controller
{
    public function guardar(Request $request)
{    
      
        $product = new Detalles();
        $product->nombre = $request->productos_id;
        $product->precio = $request->precio;
        $product->cantidad = $request->cantidad;
        $product->total = $request->cantidad*$request->precio ;
        $product->save();
   
        
        return redirect('Compras/factura'); 
    }

public function factura ()

{
    $productos = Detalles::all(); 
    
    return view ('Compras/factura', compact('productos'));
}

public function eliminar($id){
    $product = Detalles::find($id);
    $product->delete();
    return redirect('Compras/factura');
   }


      
}
