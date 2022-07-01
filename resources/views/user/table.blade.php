<table class="table table-sm" align="center">
	<thead>
		<tr>
			
			<th>Id</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Opciones</th>
		</tr>




	</thead>

	<tbody>
		@foreach($user as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->name}}</td>
			<td>{{$users->email}}</td>
			<td>
				
				<div class="opts">

                 <form id="delete-form"  name="form1" 
                                             + action="{{route('users.delete', $users->id)}}"
                                                                        method="post">
                                    @csrf @method('DELETE')

                                     <a href="{{route('users.edit', $users->id)}}" data-toggle="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>

                                     
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