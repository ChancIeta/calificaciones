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


    <a href="{{route("createProyect")}}" class="buttonFalse">Agregar Proyecto</a>

  </div>
</div>

<div class="tareas">
  <div class="wrap">
    <ul class="lista" id="lista">
     @foreach($user->proyectos as $proyecto)
<li><a href="/Actividades/{{$proyecto->id}}"> {{ $proyecto->title}} </a></li>
     @endforeach



    </ul>
  </div>
</div>
<script src="js/proyectos.js"></script>
</div>
@endsection
