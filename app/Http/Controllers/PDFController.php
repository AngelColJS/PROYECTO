<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Detalles;
use Illuminate\Http\Request;
use App\Models\User;
use  PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $cliente = Compras::get();
        $dat =[
         'compras' => $cliente 
        ];
        $users = Detalles::get();
  
        $data = [
            'title' => 'Factura ventas Angel Col',
            'date' => date('m/d/Y'),
            'users' => $users
            
        ]; 
            
        $pdf = PDF::loadView('PDF/myPDF', $data, $dat);
     
        return $pdf->download('factura.pdf');
    }
   
}
