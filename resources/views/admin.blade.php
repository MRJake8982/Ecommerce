@extends('plantilla-adm')

@section('seccion-adm')
<div class="container"> 
<form method="POST" action="{{route('articulo.crear')}}">
  @csrf
   <label for="inputNombre">Nombre Juego</label>
      <input type="text" class="form-control" required="true" name="nombre" id="inputText" placeholder="Nombre del Juego">

      <label for="inputSku">sku</label>
      <input type="text" class="form-control" name="SKU" required="true" id="inputSku" placeholder="Ingresar SKU">


  
    <label for="inputDescripcion">Descripcion</label>
    <input required="true" type="text" class="form-control" name="descripcion" id="inputDes" placeholder="Ingrese Descripcion">
  
  
  
      <label for="inputPlat">Plataforma</label>
      <input type="text" required="true" class="form-control" name="plataforma" id="inputCity" placeholder="ps4,ps3,xbox 360, xbox one, etc">
  
  
    <label for="inputDesarrolladora">Desarrolladora</label>
    <input type="text" required="true" class="form-control" name="desarrolladora" id="inputAddress2" placeholder="Ingrese desarrolladora">
  
  
    <label for="inputPrecio">Precio</label>
    <input type="text" class="form-control" required="true" name="precio" id="inputAddress2" placeholder="Ingrese Precio">

      <label for="inputIdioma">Idioma</label>
     <input type="text" name="idioma" class="form-control" required="true" id="inputIdioma" placeholder="Idioma 1, Idioma 2, Idioma 3">
  
 
  
  <button type="submit" class="btn btn-primary">Crear</button>
  <button type="clear" class="btn btn-secundary">limpiar</button>
</form>

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