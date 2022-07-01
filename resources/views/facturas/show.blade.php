@extends('layouts.app')

@section('title')
Facturas

@endsection



@section('body-page')

<div class="container">
	
<div class="card" style="padding:20px;">
	
<div class="card-header">
	<div class="row">	
		<div class="col-md-8">	
	<h2> <i class="fa-solid fa-sheet-plastic"></i> Compras de la factura:{{$factura->id_factura}}</h2> 
	</div>
	<div class="col-md-4" >	 
	<h4>Comprador: {{$factura->comprador}}</h4>
	</div>
	</div>
</div>


<table class="table">
	<thead>
		<tr>
			
			<th>Id</th>
			<th>Producto</th>
			<th>Precio</th>
			<th>Impuesto</th>
			<th>Total</th>
			<th>Fecha</th>

		</tr>


	</thead>


	<tbody>
		@foreach($compras as $compra)
         
         <tr>
         	<td>{{$compra->id_compra}}</td>
         	<td>{{$compra->product}}</td>
         	<td>{{$compra->price}}</td>
         	<td>{{$compra->tax}}</td>
         	<td>{{$compra->total}}</td>
         	<td>{{$compra->created_at}}</td>
         	
         </tr>

		@endforeach 
		<tr>	

         	<td></td>
         	<td></td>
         	<td></td>
         	<td></td>
         	<td style="background-color: blue; color: white; width:300px; "><h5>	{{$total}}</h5></td>
         	<td>	</td>


		</tr>



	</tbody>



</table>

<div>	
<a href="{{route('facturas.index')}}" class="btn btn-secondary"> Volver</a>
</div>
</div>


</div>


@endsection
