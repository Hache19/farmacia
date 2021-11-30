@extends ('layouts.plantilla')
@section('title','Rol '. $rol->nombre_rol)
@section('content')

    <h1> Bienvenido a la seccion rol: {{ $rol->nombre_rol }}</h1>

@endsection
