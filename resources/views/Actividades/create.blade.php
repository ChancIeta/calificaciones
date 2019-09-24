@extends('layouts.app')

@section('content')
<div class="container">


    <head>
    <!-- Scripts -->

    <link href="{{ asset('css/create.css') }}" rel="stylesheet">

  </head>
    <div id="form-main">
      <h1 style="margin-left:35%;">Crear Actividad</h1>
      <div id="form-div">
        <form action="/p" class="form" id="form1" method="post">
          @csrf

          <p class="name">
            <input name="title" type="text"  class="form-control {{$errors->has('title') ? 'is-invalid':''}}" placeholder="nombre" id="name" ></textarea>
          </p>
          @if ($errors->has('title'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('title')}}</strong>
          </span>
          @endif

          <p class="description">
            <textarea name="description" type="text" cols="40" rows="5" class="form-control {{$errors->has('description') ? 'is-invalid':''}}" id="email" placeholder="descripcion" /></textarea>
          </p>

          @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('description')}}</strong>
          </span>
          @endif


          <div class="submit">
            <input type="submit" value="Enviar" id="button-blue"/>
            <div class="ease"></div>
          </div>
        </form>
      </div>
</div>
@endsection
