@extends('layouts.app')

@section('content')
<div class="container">

    <head>
    <!-- Scripts -->
    <script src="{{ asset('js/proyectos.js') }}" defer></script>
    <link href="{{ asset('css/proyectos.css') }}" rel="stylesheet">

  </head>
    <div class="principal">
    <div class="wrap center" >


      <h1 style="margin-left:35%;">Prueba</h1>

    </div>
  </div>

  <div class="tareas">
    <div class="wrap">
      <ul class="lista" id="lista">
<p>Esta es una prueba</p>


      </ul>
    </div>
  </div>
  <script src="js/proyectos.js"></script>
</div>
@endsection
