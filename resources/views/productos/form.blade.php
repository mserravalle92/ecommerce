
	{!! Form::open(['url'=> $url, 'method' => $method]) !!}

	<div class="form-group">
		{{ Form::text('titulo',$producto->titulo,['class'=>'form-control','placeholder'=>'Título...']) }}
	</div>

	<div class="form-group">
		{{ Form::number('pricing',$producto->pricing,['class'=>'form-control','placeholder'=>'Precio del producto...']) }}
	</div>

	<div class="form-group">
		{{ Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control','placeholder'=>'Descripción...']) }}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/productos')}}">Regresar al listado de productos</a>
		<input type="submit" value="crear" class="btn btn-success">
	</div>	
	


	{!! Form::close() !!}

