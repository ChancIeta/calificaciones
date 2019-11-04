<div class="modal fade" id="modalConfigUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Configuración de la Cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user">
                    <div class="form-group">
                        <label for="name" class="ml-2">Nombre</label>
                        <input type="text" class="form-control form-control-user" id="name" name="name" aria-describedby="emailHelp" placeholder="Nombre" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="ml-2">Email</label>
                        <input type="text" class="form-control form-control-user" id="email" name="email" disabled aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="ml-2">Usuario</label>
                        <input type="text" class="form-control form-control-user" id="username" name="username" disabled aria-describedby="emailHelp" value="{{ Auth::user()->username }}">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password-confirm" class="form-control form-control-user" placeholder="Confirm Password">
                    </div>
                    <hr>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                        <span class="icon text-white-50">
                            <i class="fa fa-close"></i>
                        </span>
                        <span class="text">Cerrar</span>
                    </button>
                    <button type="submit" class="btn btn-primary float-right mr-2">
                        <span class="icon text-white-50">
                            <i class="fa fa-save"></i>
                        </span>
                        <span class="text">Guardar Cambios</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>