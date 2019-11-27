@extends('layouts.website')


@section('content')
<div class="container">


</head>
  <div class="principal">
  <div class="wrap center" >


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
