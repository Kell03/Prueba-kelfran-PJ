<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Validator, Hash;


class ProductsController extends Controller
{
    //

    public function getProducts(Request $request){


        $products = Products::select('*')->OrderBy('id_product', 'desc')->paginate(10);

        return view('productos.index', compact('products'));


    }


    public function addProducts(Request $request){

        return view('productos.create');
    }


    public function storeProducts(Request $request){

        $rules = [

            'name' => 'required|unique:products',
            'price'=> 'required|numeric|min:1',
            'tax'=> 'required|numeric|min:1',
            'amount'=>'',
            'description'=> '',



        ];



         $validator = validator::make($request->all(), $rules);

        if($validator->fails()):

         return back()->withErrors($validator)->withInput()->with('message','Se ha producido un error')->with('typealert', 'danger');


        else:

            $products = new products;
            $products->name = $request->get('name');
            $products->price = $request->get('price');
            $products->tax = $request->get('tax');
            $products->amount = $request->get('amount');
            $products->description = $request->get('description');
            $products->save();

            return redirect('/products')->with('message', 'Producto registrado correctamente')->with('typealert', 'success');



        endif;
    }


    public function editProducts(Request $request, $id_product){


        $product = products::findOrFail($id_product);
        return view('productos.edit', compact('product'));
    }


    public function updateProducts(Request $request, $id_product){

         $rules = [

            'name' => 'required',
            'price'=> 'required|numeric|min:1',
            'tax'=> 'required|numeric|min:1',
            'amount'=>'',
            'description'=> '',



        ];



         $validator = validator::make($request->all(), $rules);

        if($validator->fails()):

         return back()->withErrors($validator)->withInput()->with('message','Se ha producido un error')->with('typealert', 'danger');


        else:

            $products = products::findOrFail($id_product);
            $products->name = $request->get('name');
            $products->price = $request->get('price');
            $products->tax = $request->get('tax');
            $products->amount = $request->get('amount');
            $products->description = $request->get('description');
            $products->update();

            return redirect('/products')->with('message', 'Producto registrado correctamente')->with('typealert', 'success');



        endif;


    }


    public function deleteProducts($id_product){

        $products = products::findOrFail($id_product);
        $products->delete();

        return redirect('/products')->with('message', 'Producto Eliminado exitosamente')->with('typealert', 'success');
    }
}
