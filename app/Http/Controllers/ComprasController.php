<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\compras;
use App\Models\facturas;
use App\Models\Products;
use Validator, Hash;
use Illuminate\Support\Facades\Session;




class ComprasController extends Controller
{
    


     public function getCompras(Request $request)
    {


$var = facturas::latest('id')->first();
IF( $var != NULL):


$id = IdGenerator::generate(['table' => 'facturas', 'length' => 6, 'prefix' => $var->id.date('ym')]);//output: INV-000001
    session(['key' => $id]);



else:

$id = IdGenerator::generate(['table' => 'facturas', 'length' => 6, 'prefix' => '0'.date('ym')]);
//output: INV-000001
    session(['key' => $id]);

     
endif;

    $tabla_compras = compras::select('*')->where('id_factura','=',$id)->OrderBy('id_compra','desc')->paginate(10);



    return view('compras.index', [
          
          'tabla_compras'=>$tabla_compras,
          'compras' => new compras,
          'products'=> products::get(),


        ]);

    
    }


    public function addCompras(Request $request){

         
         $rules =[

              'product'=>'required',
              'total'=>'required'


         ];


         $validator = validator::make($request->all(), $rules);

        if($validator->fails()):

            return back()->withErrors($validator)->withInput()->with('message','Se ha producido un error')->with('typealert', 'danger');


        else:

            $compras = new compras;

            $compras->product = $request->get('product');
            $compras->total = $request->get('total');
            $compras->id_factura = $request->get('id_factura');
            $tax =products::select('tax')->where('name','=',$request->get('product'))->first();
            $compras->tax = $tax->tax;
            $price =products::select('price')->where('name','=',$request->get('product'))->first();
            $compras->price = $price->price;
            $compras->comprador = $request->get('comprador');;
            $compras->save();

            return redirect('/compras')->with('message', 'Producto registrado correctamente')->with('typealert', 'success');



        endif;



    }

    public function facturarCompras(Request $request){



                 $facturas = new facturas;

            $facturas->id_factura = session('key');
            $facturas->status = 'Pendiente';

            $facturas->save();

            session()->forget('key');

            return redirect('/facturas')->with('message', 'compras registradas correctamente')->with('typealert', 'success');







    }
}
