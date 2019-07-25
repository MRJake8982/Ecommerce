@extends('plantilla-web')

@section('seccion-web')
  <div class="form-row">

  	<div class="col-md-6">
<img src="{{ asset('image/plantilla.jpg') }}" style="" alt="" class="img-thumbnail">
</div>

<div class="col-md-6">
	<div class="container" style="padding: 3%">
	<h1>{{$articulo->nombre}}</h1>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

	<h3>Plataforma:</h3><h3>{{$articulo->Plataforma}}</h3>

	<h4>Estado:</h4><h4 style="color:green;">{{$articulo->estado}}</h4>
	
	<h1>Precio:{{$articulo->precio}}</h1>
	<button class="btn btn-danger">Añadir al Carro</button>
	</div>

</div>
</div>

@endsection