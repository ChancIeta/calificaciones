<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button class="btn btn-link d-md-none rounded-circle mr-3" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" id="sidebarMenuButton">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Search -->
<!--    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fa fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>-->
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                                            {!! csrf_field() !!}
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    @if (Auth::user()->alumno()->count() != 0 && Auth::user()->profesor()->count() != 0 )
                        Maestro\Alumno
                    @elseif (Auth::user()->alumno()->count())
                        Alumno
                    @elseif (Auth::user()->profesor()->count() != 0 )
                        Maestro
                    @else
                        Sin Rol
                    @endif
                </span>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{ Auth::user()->name }}
                </span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<!--                <a class="dropdown-item" href="#">
                    <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Perfil
                </a>-->
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalConfigUser">
                    <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Configuración
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Actividad
                </a>
                <div class="dropd   own-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item">
                        <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </li>

    </ul>

</nav>