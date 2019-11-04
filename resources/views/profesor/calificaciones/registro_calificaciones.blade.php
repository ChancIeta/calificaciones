@extends('layouts.website')

@section('title','Calificaciones')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Asignatura: {{ $materia->name }}</h1>
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
                            <th scope="col" style="width: 30%">Alumno</th>
                            @for($x = 0; $x < $materia->unidades;$x++)
                                <th scope="col">Unidad {{ $x + 1 }}</th>
                            @endfor
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($actual as $asignatura)
                            <tr>
                                <th scope="row">{{ $asignatura->alumno()->first()->user()->first()->name }}</th>
                                @for($x = 0; $x < $materia->unidades;$x++)
                                    <td>
                                        <input class="form-control">
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $actual->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
