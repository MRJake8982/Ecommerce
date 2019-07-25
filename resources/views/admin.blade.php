@extends('plantilla-adm')

@section('seccion-adm')
<div class="container" style="padding-top: 10px; text-align: right;">
	
	<nav >
		<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sesion
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Mis datos</a>
    <a class="dropdown-item" href="#">Cerrar sesion</a>
  
  </div>
</div>
	</nav>
</div>

<div class="container" style="padding: 2%">
 <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">sku</th>
      <th scope="col">Descripcion</th>
      <th scope="col">plataforma</th>
      <th scope="col">Desarrolladora</th>
      <th scope="col">Idioma</th>
 	  <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($articulo as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><a href="{{route('articulo.detalle',$item)}}"> {{$item->nombre}}</a></td>
      <td>{{$item->sku}}</td>
      <td>{{$item->descripcion}}</td>
      <td>{{$item->Plataforma}}</td>
      <td>{{$item->desarrolladora}}</td>
      <td>{{$item->idioma}}</td>
      <td>{{$item->precio}}</td>
    </tr>
    @endforeach()
   </tbody>
</table></div>

@endsection