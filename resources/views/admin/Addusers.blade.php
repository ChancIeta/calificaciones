@extends('layouts.website')

@section('content')
<div class="container">


    <head>
    <!-- Scripts -->

    <link href="{{ asset('css/create.css') }}" rel="stylesheet">

  </head>
    <div id="form-main">
      <h1 style="margin-left:35%;">Agregar nuevos usuarios</h1>
      <div id="form-div">
        <form action="/u" class="form" id="form1" method="post">
          @csrf

          <p class="name">
            <input name="name" type="text"  class="form-control {{$errors->has('name') ? 'is-invalid':''}}" placeholder="nombre" id="name" ></input>
          </p>
          @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('name')}}</strong>
          </span>
          @endif

          <p class="username">
            <input name="username" type="text" cols="40" rows="5" class="form-control {{$errors->has('username') ? 'is-invalid':''}}" id="username" placeholder="username" /></input>
          </p>

          @if ($errors->has('username'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('username')}}</strong>
          </span>
          @endif

          <p class="email">
            <input name="email" type="email" cols="40" rows="5" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" id="email" placeholder="email" /></input>
          </p>

          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('email')}}</strong>
          </span>
          @endif

          <p class="password">
            <input name="password" type="password" cols="40" rows="5" class="form-control {{$errors->has('password') ? 'is-invalid':''}}" id="password" placeholder="password" /></input>
          </p>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('password')}}</strong>
          </span>
          @endif

          <p class="password_confirmation">
            <input name="password_confirmation" type="text" cols="40" rows="5" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid':''}}" id="password_confirmation" placeholder="password_confirmation" /></input>
          </p>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong{{$errors->first('password')}}</strong>
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
