@extends('plantilla-adm')

@section('seccion-adm')
<
<h1>id:{{$articulo->id}}</h1>

<h1>Nombre:{{$articulo->nombre}}</h1>

<h1>plataforma:{{$articulo->Plataforma}}</h1>
<h1>Precio:{{$articulo->precio}}</h1>


@endsection