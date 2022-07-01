

@extends('layouts.app')

@section('title')

Usuarios
@endsection

@section('body-page')

<div class="content">
	

<div class="row">
	
<div class="col-md-3">
	
<div class="card" style="padding:10px;">

	<div class="card-header">
		
		<h2> <i class="fa-solid fa-users"></i> Agregar Usuario</h2>
	</div>


<form action="#" method="POST">
	
@csrf

<div class="row">
	

                   <div class="col-md-10 mb-3" style="margin-top: 10px;">
   		
   		         <div class="input-group ">
                     <span class="input-group-text">Nombre</span>
                       <input type="text" name="name" class="form-control"  aria-describedby="basic-addon1" >
                 </div>

   	           </div>


   	           	<div class="col-md-12 mb-3" style="margin-top: 10px;">
   		
   		         <div class="input-group ">
                     <span class="input-group-text">Email</span>
                       <input type="email" name="email" class="form-control"  aria-describedby="basic-addon1" >
                 </div>

   	           </div>


   	             <div class="col-md-10 mb-3" style="margin-top: 10px;">
   		
   		         <div class="input-group ">
                     <span class="input-group-text">Contraseña</span>
                       <input type="password" name="password" class="form-control"  aria-describedby="basic-addon1" >
                 </div>

   	           </div>


   	            <div class="col-md-10 mb-3" style="margin-top: 10px;">
   		
   		         <div class="input-group ">
                     <span class="input-group-text"> Confirmar </span>
                       <input type="password" name="confirmacion" class="form-control"  aria-describedby="basic-addon1" >
                 </div>

   	           </div>




   	           
   	          <div class="col-md-10 mb-3" style="margin-top: 10px;">

   	          	<input type="submit" class=" btn btn-primary" disabled>

   	          </div>

</div>

</form>
	


</div>


</div>





<div class="col-md-9">
	
	<div class="card" style="padding:10px;">

		<div class="card-header">
			<h2>Usuarios Registrados</h2>
		</div>
		
		@include('user.table')
	</div>
</div>





</div>

</div>


@endsection