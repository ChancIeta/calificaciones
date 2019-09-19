@extends('layouts.app')

@section('content')
<div class="container">
  <head>
  <!-- Scripts -->
  <script src="{{ asset('js/proyectos.js') }}" defer></script>
  <link href="{{ asset('css/proyectos.css') }}" rel="stylesheet">
</head>
  <div class="principal">
  <div class="wrap">
    <form class="formulario" action="">
      <input type="text" id="tareaInput" placeholder="Agrega tu proyecto">
      <input type="button" class="boton" id="btn-agregar" value="Agregar proyecto" >
    </form>
  </div>
</div>

<div class="tareas">
  <div class="wrap">
    <ul class="lista" id="lista">
      <li><a href="actividades.html">Personal.</a></li>
      <li><a href="actividades.html">Proyecto de negocios.</a></li>

    </ul>
  </div>
</div>
<script src="js/proyectos.js"></script>
</div>
@endsection
