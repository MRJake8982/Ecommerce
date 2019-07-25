@extends('plantilla-adm')

@section('seccion-adm')
<div class="container">
<h1 >id:{{$articulo->id}}</h1>

<h1>Nombre:{{$articulo->nombre}}</h1>

<h1>plataforma:{{$articulo->Plataforma}}</h1>

<h1>Precio:{{$articulo->precio}}</h1>

</div>
@endsection