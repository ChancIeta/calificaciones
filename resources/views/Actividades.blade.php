@extends('layouts.app')

@section('content')
<div class="container">
  <head>
  <!-- Scripts -->
  <script src="{{ asset('js/actividades.js') }}" defer></script>
  <link href="{{ asset('css/actividades.css') }}" rel="stylesheet">
</head>
  <!-- partial:index.partial.html -->
   <section class="section">
       <h1>Actividades</h1>

   </section>
   <form action="Actividad.html">
       <input type="submit" class="boton" id="btn-agregar" value="Aregar Actividad">
   </form>
   <div class="drag-container">
       <ul class="drag-list">
           <li class="drag-column drag-column-on-hold">
               <span class="drag-column-header">
       <h2>Por Iniciar</h2>
       <svg class="drag-header-more" data-target="options1" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
     </span>

               <div class="drag-options" id="options1"></div>

               <ul class="drag-inner-list" id="1">
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
               </ul>
           </li>
           <li class="drag-column drag-column-in-progress">
               <span class="drag-column-header">
       <h2>En Proceso</h2>
       <svg class="drag-header-more" data-target="options2" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
     </span>
               <div class="drag-options" id="options2"></div>
               <ul class="drag-inner-list" id="2">
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
               </ul>
           </li>
           <li class="drag-column drag-column-needs-review">
               <span class="drag-column-header">
       <h2>Nececita Revision</h2>
       <svg data-target="options3" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
     </span>
               <div class="drag-options" id="options3"></div>
               <ul class="drag-inner-list" id="3">
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
               </ul>
           </li>
           <li class="drag-column drag-column-approved">
               <span class="drag-column-header">
       <h2>Aprovado/Finalizado</h2>
       <svg data-target="options4" class="drag-header-more" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/</svg>
     </span>
               <div class="drag-options" id="options4"></div>
               <ul class="drag-inner-list" id="4">
                   <li class="drag-item"></li>
                   <li class="drag-item"></li>
               </ul>
           </li>
       </ul>
   </div>


   <!-- partial -->
   <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js'></script>


</div>
@endsection
