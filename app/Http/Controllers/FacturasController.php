<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facturas;
use App\Models\compras;

class FacturasController extends Controller
{
    

      public function getFacturas(Request $request){


        $facturas = facturas::select('*')->OrderBy('id', 'desc')->paginate(10);

        return view('facturas.index', compact('facturas'));


    }

    public function showFacturas(Request $request, $id_factura){


        $compras = compras::select('*')->where('id_factura','=', $id_factura)->OrderBy('id_compra', 'desc')->paginate(10);
        $total = compras::select('*')->where('id_factura','=', $id_factura)->sum('total');
        $factura = compras::select('*')->where('id_factura','=', $id_factura)->first();

        return view('facturas.show', compact('compras', 'total', 'factura'));


    }

    public function editFacturas(Request $request, $id_factura){

        


            $factura = facturas::select('*')->where('id_factura','=', $id_factura)->first();


        if($factura->status == 'Pagada'):

         return back()->withInput()->with('message','Esta factura ya ha sido verificada')->with('typealert', 'secondary');


        else:

            $factura->status = 'Pagada';
 
            $factura->update();

            return redirect('/facturas')->with('message', 'Factura verificada  correctamente')->with('typealert', 'success');



        endif;


    }

     public function deleteFacturas($id_factura){

        $facturas= facturas::select('*')->where('id_factura','=', $id_factura)->first();
        $facturas->delete();

        return redirect('/facturas')->with('message', 'Factura Eliminado exitosamente')->with('typealert', 'success');
    }
}
