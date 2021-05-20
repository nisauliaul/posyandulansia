<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Admin</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">PL</a>
      </div>
      <ul class="sidebar-menu nav-item {{ request()->is ('/') ? 'active' : '' }} ">
          <li class="menu-header">Menu</li>
          <li class="{{ request()->is('dashboard') ? ' active' : '' }}"><a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          <li class="{{ request()->is('pasien') ? ' active' : '' }}"><a class="nav-link" href="/pasien"><i class="far fa-user"></i> <span>Data Lansia</span></a></li>
          <li class="{{ request()->is('catatankesehatan') ? ' active' : '' }}"><a class="nav-link" href="/catatankesehatan"><i class="far fa-edit"></i> <span>Pemeriksaan Lansia</span></a></li>
          <li class="{{ request()->is('informasi-lansia') ? ' active' : '' }}"><a class="nav-link" href="/informasi-lansia"><i class="far fa-user"></i> <span>Informasi Lansia</span></a></li>
          <li class="{{ request()->is('logout') ? ' active' : '' }}"><a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
    </aside>
  </div>