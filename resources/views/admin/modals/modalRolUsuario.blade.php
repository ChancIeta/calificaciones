<div class="modal fade" id="modalRole" tabindex="-1" role="dialog" aria-labelledby="modalRole" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¡Bienvenido a KardTec!</h5>
            </div>
            <div class="modal-body">
                <p>
                    Para empezar... ¿Tu eres?
                </p>

                <div class="btn-group nav nav-tabs" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-dark" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Alumno</button>
                    <button type="button" class="btn btn-outline-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profesor</button>
                </div>
                <div class="mt-4 tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form method="POST" action="{{ route('set.role') }}">
                            @csrf
                            <input  type="hidden" name="tipo" value="alumno">
                            <div class="form-group">
                                <label for="carrera">Seleccione tu carrera universitaria:</label>
                                <select class="form-control" id="carrera" name="carrera">
                                    @foreach (\App\Carreras::all() as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->name }}({{ $carrera->code }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">¡Comencemos!</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form method="POST" action="{{ route('set.role') }}">
                            @csrf
                            <input  type="hidden" name="tipo" value="profesor">
                            <div class="form-group">
                                <label for="titulo">Ingresa tu formación académica:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Licenciado en Administración de Empresas" required="">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">¡Comencemos!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>