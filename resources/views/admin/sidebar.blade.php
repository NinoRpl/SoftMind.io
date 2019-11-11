<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('img/users/'.Session::get('gambar') ) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('nama')}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="@yield('dashboard-menu')"><a href="/home_user"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="@yield('softcms-menu')"><a href="#"><i class="fa fa-code"></i> <span>SoftCMS</span></a></li>
        <li class="treeview @yield('fitur-menu')">
          <a href="#"><i class="fa fa-code"></i> <span>Fitur SoftMind</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('monitor-menu')"><a href="/home_user/monitor">Monitoring</a></li>
            <li class="@yield('kontrol-menu')"><a href="/home_user/kontrol">Kontrolling</a></li>
          </ul>
        </li>
        <li class="@yield('report-menu')"><a href="/home_user/report"><i class="fa fa-flag"></i> <span>Report Isue</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
