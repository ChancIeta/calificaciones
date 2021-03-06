<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark toggle" id="sidebarMenu">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route("dashboard.index") }}">
            <i class="fa fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Usuarios
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/u/create" >
            <i class="fa fa-fw fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#usuarios" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-fw fa-cog"></i>
            <span>Usuarios</span>
        </a>
        <div class="collapse" id="usuarios">
            <div class="list-group">
                <a href="{{ route('dashboard.users.index') }}" class="list-group-item list-group-item-action">Lista</a>
                <a href="{{ route('dashboard.users.create') }}" class="list-group-item list-group-item-action">Crear Usuariao</a>
                <a href="#" class="list-group-item list-group-item-action">Alumnos Previos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#maestros" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-fw fa-cog"></i>
            <span>Maestros</span>
        </a>
        <div class="collapse" id="maestros">
            <div class="list-group">
                <a href="{{ route('dashboard.asignaturas') }}" class="list-group-item list-group-item-action">Asignaturas</a>
                <a href="#" class="list-group-item list-group-item-action">Alumnos Actuales</a>
                <a href="#" class="list-group-item list-group-item-action">Alumnos Previos</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fa fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span>Tables</span>
        </a>
    </li>
</ul>
