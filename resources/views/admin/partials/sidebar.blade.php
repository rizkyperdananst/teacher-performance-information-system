<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">SMK Negeri 1 Semarang</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Guru -->
    <li class="nav-item {{ Request()->is('admin/teacher*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('teacher.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Guru</span></a>
    </li>
    
    <!-- Nav Item - Mata Pelajaran -->
    <li class="nav-item {{ Request()->is('admin/course*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('course.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mata Pelajaran</span></a>
    </li>

    <!-- Nav Item - Kelas -->
    <li class="nav-item {{ Request()->is('admin/class*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('class.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kelas</span></a>
    </li>

    <!-- Nav Item - Kelas Ajar-->
    <li class="nav-item {{ Request()->is('admin/teaching-class*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('teaching-class.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kelas Ajar</span></a>
    </li>

    <!-- Nav Item - Penilaian-->
    <li class="nav-item {{ Request()->is('admin/rating*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="{{ route('rating.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Penilaian</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Setting
    </div>

    <!-- Nav Item - Setting Account-->
    <li class="nav-item {{ Request()->is('admin/teaching-class*') ? 'active' : '' }}">
        <a class="nav-link mb-0 pb-0" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Akun</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
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
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>