@extends("layouts.app");

@section("content")

<div class="big-padding text-center blue-grey white-text">
	<h1>Productos</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Título</td>
				<td>Descripción</td>
				<td>Precio</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->titulo}}</td>
				<td>{{$producto->descripcion}}</td>
				<td>{{$producto->pricing}}</td>
				<td>
				<a href="{{url('/productos/'.$producto->id.'/edit')}}">
				Editar	
				</a>

				@include('productos.delete', ['producto' => $producto])
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/productos/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection