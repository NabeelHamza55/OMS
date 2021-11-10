@extends('dashboard.layouts.master') @section('title', 'Dashboard') @section('content')
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->

<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="/admin">
                        <img class="logo" src="{{ asset('custom/admin/assets/media/image/logo.png') }}"
                            alt="logo">
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <div class="header-search-form">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn header-search-close-btn">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">Apps</a>
                            <div class="dropdown-menu dropdown-menu-big">
                                <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between">
                                    <h5 class="mb-0">Apps</h5>
                                </div>
                                <div class="p-3">
                                    <div class="row row-xs">
                                        <div class="col-6">
                                            <a href="chat.html">
                                                <div class="border-radius-1 text-center mb-3">
                                                    <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-primary text-white rounded-circle">
                                                            <i class="width-30 height-30"
                                                                data-feather="message-circle"></i>
                                                        </span>
                                                    </figure>
                                                    <div class="mt-2">Chat</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="mail.html">
                                                <div class="border-radius-1 text-center mb-3">
                                                    <figure class="avatar avatar-lg border-0">
                                                        <span
                                                            class="avatar-title bg-secondary text-white rounded-circle">
                                                            <i class="width-30 height-30" data-feather="mail"></i>
                                                        </span>
                                                    </figure>
                                                    <div class="mt-2">Mail</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="todo-list.html">
                                                <div class="border-radius-1 text-center">
                                                    <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-info text-white rounded-circle">
                                                            <i class="width-30 height-30"
                                                                data-feather="check-circle"></i>
                                                        </span>
                                                    </figure>
                                                    <div class="mt-2">Todo List</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="file-manager.html">
                                                <div class="border-radius-1 text-center">
                                                    <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-warning text-white rounded-circle">
                                                            <i class="width-30 height-30" data-feather="file"></i>
                                                        </span>
                                                    </figure>
                                                    <div class="mt-2">File Manager</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Actions" data-toggle="dropdown">Create</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Add Products</a>
                                <a href="#" class="dropdown-item">Add Category</a>
                                <a href="#" class="dropdown-item">Add Report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Reports</a>
                                <a href="#" class="dropdown-item">Customers</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                <i data-feather="search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                <i class="maximize" data-feather="maximize"></i>
                                <i class="minimize" data-feather="minimize"></i>
                            </a>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="{{ asset('custom/admin/assets/media//image/user/man_avatar3.jpg') }}"
                                        class="rounded-circle" alt="avatar">
                                </figure>
                                <span class="ml-2 d-sm-inline d-none"> {{ session('login')->first_name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="{{ asset('custom/admin/assets/media//image/user/man_avatar3.jpg') }}"
                                            class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="text-center">Bony Gidden</h5>
                                    <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                    <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                                </div>
                                <div class="list-group">
                                    <a href="profile.html" class="list-group-item">View Profile</a>
                                    <a href="" class="list-group-item" data-sidebar-target="#settings">Setting</a>
                                    <a href="/logout" class="list-group-item text-danger">Logout!</a>

                                </div>
                                <div class="p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Storage
                                            <span>%25</span>
                                        </h6>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success-gradient" role="progressbar"
                                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <p class="small mb-0">
                                        <a href="#">Privacy policy</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-header">
                <span>Navigation</span>
                <a href="#">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="navigation-menu-body">
                <ul>
                    {{-- Dashboard --}}
                    <li>
                        <a class="@yield('dashboard')" href="/admin">
                            <span class="nav-link-icon">
                                <i data-feather="pie-chart"></i>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    {{-- System Setting --}}
                    @if (session('login')->usertype_id == 1)

                        <li>
                            <a class="@yield('system')" href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="settings"></i>
                                </span>
                                <span>System Management</span>
                            </a>
                            <ul>
                                <li class="bg-dark rounded shadow mx-4 my-2">
                                    <a href="/roles">Roles List</a>
                                </li>
                                <li class="bg-dark rounded shadow mx-4 my-2">
                                    <a href="/usertypes">User Types</a>
                                </li>
                            </ul>
                        </li>

                        {{-- Users --}}
                        <li>
                            <a class="@yield('users')" href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="users"></i>
                                </span>
                                <span>Manage Users</span>
                            </a>
                            <ul>
                                <li class="bg-dark rounded shadow mx-4 my-2">
                                    <a href="/users">Users List</a>
                                </li>
                                <li class="bg-dark rounded shadow mx-4 my-2">
                                    <a href="/users/add">Add User</a>
                                </li>
                            </ul>
                        </li>

                    @endif
                    {{-- Employees --}}
                    <li>
                        <a class="@yield('employees')" href="#">
                            <span class="nav-link-icon">
                                <i data-feather="users"></i>
                            </span>
                            <span>Manage Employees</span>
                        </a>
                        <ul>
                            <li class="bg-dark rounded shadow mx-4 my-2">
                                <a href="/employees">Employee List</a>
                            </li>
                            <li class="bg-dark rounded shadow mx-4 my-2">
                                <a href="/add_employee">Add Employee</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Posts --}}
                    <li>
                        <a class="@yield('posts')" href="#">
                            <span class="nav-link-icon">
                                <i data-feather="edit"></i>
                            </span>
                            <span>Manage Posts</span>
                        </a>
                        <ul>
                            <li class="bg-dark rounded shadow mx-4 my-2">
                                <a href="{{ route('posts.index') }}">Posts List</a>
                            </li>
                            <li class="bg-dark rounded shadow mx-4 my-2">
                                <a href="{{ route('posts.create') }}">Add Post</a>
                            </li>
                        </ul>
                    </li>

                    <hr class='shadow-0 text-light'>
                    <li>
                        <a href="#">
                            <span class="nav-link-icon">
                                <i data-feather="menu"></i>
                            </span>
                            <span>Menu Level</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">
            <div class="content">
                @yield('main_content')
            </div>
            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2020 Gogi - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>

    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

@endsection
