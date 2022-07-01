@extends('layouts.app')

@section('title')
Products
@endsection


@section('body-page')

<div class="container">
	
<div class="card" style="padding:20px;">
	
<div class="card-header">
	<h2> <i class="fa-solid fa-box-archive"></i> Productos Disponibles</h2>
</div>

<div class="btn_agregar" style=""><a href="{{route('products.create')}}" class="btn btn-primary"> <i class="fa-solid fa-plus"></i>  Agregar Producto</a></div>

<table class="table">
	<thead>
		<tr>
			
			<th>Id</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Impuesto</th>
			<th>Cantidad</th>
			<th>Opciones</th>
		</tr>


	</thead>


	<tbody>
		@foreach($products as $product)
         
         <tr>
         	<td>{{$product->id_product}}</td>
         	<td>{{$product->name}}</td>
         	<td>{{$product->price}}</td>
         	<td>{{$product->tax}}</td>
         	<td>{{$product->amount}}</td>
         	<td>
         		<div class="opts">

                 <form id="delete-form"  name="form1" 
                                             + action="{{route('products.delete', $product->id_product)}}"
                                                                        method="post">
                                    @csrf @method('DELETE')

                                     <a href="{{route('products.edit',$product->id_product)}}" data-toggle="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>

                                     
                                           {{-- elemento "a" como boton submit--}}
                                               <a href="#" onclick='this.parentNode.submit(); return false;' data-toggle="tooltip" data-bs-placement="top" title="Eliminar" style="color:red"> 
                                               <i class="fa-solid fa-trash-can"></i></a>

                                               {{-- elemento "a" como boton submit--}}

                                              </form>

				</div>



         	</td>

         </tr>

		@endforeach 



	</tbody>


</table>

</div>


</div>


@endsection
