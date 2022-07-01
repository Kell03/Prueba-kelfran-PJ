@extends('layouts.app')

@section('title')
Facturas

@endsection



@section('body-page')

<div class="container">
	
<div class="card" style="padding:20px;">
	
<div class="card-header">
	<h2> <i class="fa-solid fa-sheet-plastic"></i> Facturas Pendientes</h2>
</div>

<div class="btn_agregar" style=""><a href="{{route('compras.index')}}" class="btn btn-primary"> <i class="fa-solid fa-plus"></i> Realizar Compra</a></div>

<table class="table">
	<thead>
		<tr>
			
			<th>Id</th>
			<th>Factura</th>
			<th>Status</th>
			<th>Opciones</th>

		</tr>


	</thead>


	<tbody>
		@foreach($facturas as $factura)
         
         <tr>
         	<td>{{$factura->id}}</td>
         	<td>{{$factura->id_factura}}</td>
         	<td>{{$factura->status}}</td>
         	<td>
         		<div class="opts">




                                     <a href="{{route('facturas.show', $factura->id_factura)}}"  style="color: gray;" data-toggle="tooltip" data-bs-placement="top" title="Ver"><i class="fa-solid fa-eye"></i></a>

                                   
                                               <form action="{{route('facturas.edit', $factura->id_factura)}}" method="POST" name="form2" id="myform">


                                              	@csrf

                                              	 <a href="#" onclick='this.parentNode.submit(); return false;' data-toggle="tooltip" data-bs-placement="top" title="Verificar"> 
                                               <i class="fa-solid fa-circle-check"></i></a>
                                              	



                                              </form>



                  <form id="delete-form"  name="form1" 
                                             + action="{{route('facturas.delete', $factura->id_factura)}}"
                                                                        method="post">
                                    @csrf 
                                    @method('DELETE')





                                     
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
