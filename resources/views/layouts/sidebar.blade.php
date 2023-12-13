<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
               <li class="menu-header">Dashboard</li>
               <li class="{{ Request::is('/dashboard') ? 'active' : '' }}"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i>
                       <span>Dashboard</span></a></li>
               <li class="menu-header">Data</li>
               {{-- <li class="{{ Request::is('admin') ? 'active' : '' }}"><a class="nav-link" href="/admin"><i class="fas fa-user"></i>
                       <span>Admin</span></a></li> --}}
               <li class="nav-item dropdown {{ Request::is('alternatifs') || Request::is('criteria') ? 'active' : '' }}">
                   <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                       <span>Alternatif</span></a>
                   <ul class="dropdown-menu">
                       <li class="{{ Request::is('alternatifs') ? 'active' : '' }}"><a class="nav-link" href="/alternatifs">
                               Alternatif</a></li>
                       <li class="{{ Request::is('avalue') ? 'active' : '' }}"><a class="nav-link" href="/avalue">
                               Nilai Alternatif</a></li>
                   </ul>
               </li>
               <li class="{{ Request::is('criterias') ? 'active' : '' }}"><a class="nav-link" href="/criterias"><i
                           class="fas fa-th-large"></i>
                       <span>Kriteria</span></a></li>
               <li class="{{ Request::is('/calculate') ? 'active' : '' }}"><a class="nav-link" href="/calculate"><i
                           class="fas fa-calculator"></i>
                       <span>Perhitungan</span></a></li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>