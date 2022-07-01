@extends('layouts.app')
@section('title')

Editar| {{$product->name}}
@endsection



@section('body-page')

<div class="content" >
	
	<div class="row" align="center">
		<div class="col-md-12">
<div class="card" style="padding:10px; margin-left: 20%; margin-right:25%;" >
	
<div class="card-header"> 
	<h2><i class="fa-solid fa-box-archive"></i> Editar Producto </h2></div>


<form action="{{route('products.update', $product->id_product)}}" method="POST" style="margin-top:20px; margin-left: 10px;">
@csrf 

<div class="row"  >
	
<div class="col-md-5 mb-3">
	<div class="input-group" >
                     <span class="input-group-text">Nombre</span>
                       <input type="text" name="name" class="form-control"  aria-describedby="basic-addon1"  value="{{old('name', $product->name)}}">
                 </div>

	

	
</div>

<div class="col-md-5 mb-3">
	<div class="input-group" >
                     <span class="input-group-text">Precio</span>
                       <input type="number" class="form-control" id="floatingInput" min="0.00" step="any" name="price" value="{{old('price', $product->price)}}">
                 </div>

	

	
</div>
</div>


<div class="row" >
	
<div class="col-md-5 mb-3">
	<div class="input-group" >
                     <span class="input-group-text">Impuesto</span>
                       <input type="number" class="form-control" id="floatingInput" min="0.00" step="any" name="tax" value="{{old('tax', $product->tax)}}">
                 </div>

	

	
</div>


<div class="col-md-5 mb-3">
	<div class="input-group" >
                     <span class="input-group-text">Cantidad</span>
                       <input type="number" name="amount" class="form-control"  aria-describedby="basic-addon1" value="{{old('amount', $product->amount)}}">
                 </div>

</div>



<div class="col-md-10 mb-3">
	<span class="input-group-text">Description</span>
          <textarea class="form-control" rows="5" aria-label="With textarea" name="description" value="{{old('description', $product->description)}}">

          	{{old('description', $product->description)}}
           
          </textarea>

</div>

</div>

<div class="row">
	
<div class="col-md-1 mb-3">
	<input type="submit" class="btn btn-primary">
</div>
</div>




	
	


</form>


</div>
</div>
</div>

</div>



@endsection