@extends('layouts.website')

@section('title','Usuarios')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Asignaturas</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Asignaturas Actuales</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo Electronico</th>
                            <th scope="col">Rol</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <th scope="row">{{ $user->username }}</th>
                                <th scope="row">{{ $user->nombre }}</th>
                                <th scope="row">{{ $user->email }}</th>
                                <th scope="row">
                                    @if ($user->rol == 1)
                                        Administrador
                                    @elseif ($user->alumno()->count() != 0 && $user->profesor()->count() != 0 )
                                        Maestro\Alumno
                                    @elseif ($user->alumno()->count())
                                        Alumno
                                    @elseif ($user->profesor()->count() != 0 )
                                        Maestro
                                    @else
                                        Sin Rol
                                    @endif
                                </th>

                                <td>
                                    <a class="btn btn-secondary" title="Calificar" href="">
                                        <i class="fa fa-check-square"></i> Calificar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
