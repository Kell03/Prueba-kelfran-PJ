@extends('layouts.app')


@section('title')
Compras
@endsection


@section('body-page')

{{--session('key')--}}

<div class="container">	

<div class="row">	
<div class="col-md-5">	

	<div class="card" style="padding:20px;">	

		<div class="card-header">

		<h2><i class="fa-solid fa-store"></i> Tienda<h2> </div>


		<form action="{{route('compras.store')}}" method="POST" style="margin-top:20px;">
			@csrf


			<div class="row">	



<div class="col-md-12">	
	<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Productos</label>
  <select name="selector" class="form-control form-select" id="referencia1" onchange="myFunction()">
    <option selected>Choose...</option>
     @foreach($products as $product)

          
          <option value="<?php echo $total= $product->price * $product->tax/100?>"> {{$product->name}}</option>

          @endforeach
  </select>
</div>
</div>


<script>

     /*$(document).ready(function(){
        
        $('#referencia1').select2();


});*/
function myFunction() {


var lista = document.getElementById("referencia1");

// Obtener el índice de la opción que se ha seleccionado
var indiceSeleccionado = lista.selectedIndex;
// Con el índice y el array "options", obtener la opción seleccionada
var opcionSeleccionada = lista.options[indiceSeleccionado];
// Obtener el valor y el texto de la opción seleccionada
var textoSeleccionado = opcionSeleccionada.text;



var cliente_o = document.getElementById("referencia1").value;

document.getElementById("cliente_o").value= parseFloat(cliente_o).toFixed(3) ;

document.getElementById("ppp").value=textoSeleccionado;





}
</script>




<div class="col-md-12">		
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Total</span>
  <input type="text" name="total" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="cliente_o">
</div>

<input type="text" name="product" style="display:none ;" id="ppp">

<input type="text" name="comprador" style="display:none;" value="{{auth::user()->name}}-{{auth::user()->id}} ">

</div>


<input type="text" name="id_factura" style="display: none;" value="{{session('key') }}">



			</div>

			<div class="col-md-12">

              <input type="submit" class="btn btn-primary" value="ingresar al carro">
              </div>


		</form>
					



		
	</div>




</div>{{--col-1--}}


<div class="col-md-7">	

	<div class="card" style="padding:20px;">	

		<div class="card-header">

		<h2><i class="fa-solid fa-cart-shopping"></i> Compras<h2> 	</div>


			<table class="table"style="margin-top: 20px;">

			<thead>	

				<tr>
	
				<th>
					Producto
				</th>
				<th>
				Total
				</th>	


				</tr>



			</thead>

			<tbody>

           @foreach($tabla_compras as $tabla_compra)
			<tr>
             
             <td> {{$tabla_compra->product}}</td>
             <td> {{$tabla_compra->total}}</td>




			</tr>	

			@endforeach



			</tbody>	




			</table>

			
              <form action="{{route('compras.factura')}}" method="post"> 
              	@csrf
              	<input type="submit" class="btn btn-success" value="Finalizar compra">

              </form>


	</div>




</div>{{--col-1--}}




</div>{{--row-1--}}
</div>



@endsection