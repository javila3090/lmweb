<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin/" class="brand-link">
    <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image"
    style="opacity: .8">
    <span class="brand-text font-weight-light" style="padding: 10px;"><b>Admin</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminlte/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{\Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="{{url('/admin/section')}}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Páginas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/banner')}}" class="nav-link">
              <i class="nav-icon fa fa-image"></i>
              <p>
                Banners
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/user')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>