<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin SPBE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/navbarcontrol" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Navbar Control
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Modul
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kebijakans" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kebijakan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tatakelolas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tata Kelola</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manajemens" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manajemen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/layanans" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('link-layanan.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('berita.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visimisis.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="footers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('question.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Q&A</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-reply"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
