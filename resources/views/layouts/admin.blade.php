<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dilesin Admin Dashboard')</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo-dilesin.png') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i> <span class="ml-1">Admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item"><i class="fas fa-user mr-2"></i> Profile</a>
          <a href="#" class="dropdown-item"><i class="fas fa-cog mr-2"></i> Settings</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/admin/dashboard') }}" class="brand-link text-center">
      <img src="{{ asset('images/logo-dilesin.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity:.8">
      <span class="brand-text font-weight-light">Dilesin Admin</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://ui-avatars.com/api/?name=Admin&background=2a2b36&color=fff" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/students') }}" class="nav-link {{ Request::is('admin/students') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Student</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/settings') }}" class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- /.sidebar -->

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">@yield('page_title', 'Dashboard')</h1>
      </div>
    </div>

    <section class="content">
      @yield('content')
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>&copy; {{ date('Y') }} Dilesin Academy.</strong> All rights reserved.
  </footer>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>
