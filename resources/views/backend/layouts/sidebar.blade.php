<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> BAUET CSE AA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                <a href="{{route('logout')  }}" class="nav-link"  onclick="event.preventDefault();
                                    this.closest('form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </form>
              </li>

            </ul>
          </li>

          @php
          $prefix = Request::route()->getPrefix();
          $route = Request::route()->getName();
          @endphp

        <li class="nav-item">
          <a href="{{ route('logo.index') }}" class="nav-link {{$route == 'logo.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Logo</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('slider.index') }}" class="nav-link {{$route == 'slider.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Slider</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('about.index') }}" class="nav-link {{$route == 'about.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>About</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{ route('event.index') }}" class="nav-link {{$route == 'event.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Event</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{ route('committee.index') }}" class="nav-link {{$route == 'committee.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Committee</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('notice.index') }}" class="nav-link {{$route == 'notice.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Notice</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('news.index') }}" class="nav-link {{$route == 'news.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>News</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('batch.index') }}" class="nav-link {{$route == 'batch.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Batch</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('general.index') }}" class="nav-link {{$route == 'general.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>General</p>
          </a>
        </li>

         
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>