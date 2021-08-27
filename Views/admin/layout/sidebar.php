<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/Storage/Statics/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NosCommerces.ma</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/Storage/uploads/users/<?= $_SESSION['token']['picture']?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/profile" class="d-block"><?= $_SESSION['token']['fullname']?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/admin" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/traders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Traders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/providers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Providers</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-plus"></i>
                        <p>
                            Requests
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/request/traders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trader Request</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/request/providers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Provider Request</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="/admin/categories" class="nav-link">
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="/admin/subcategories" class="nav-link">
                        <p>
                            Subcategories
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="/admin/comments" class="nav-link">
                        <p>
                            comments
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
