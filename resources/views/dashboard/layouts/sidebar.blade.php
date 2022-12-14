<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          {{-- kalau ada Request dashboard tampilkan class active kalau tdk nda usah kasih class active --}}
          <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/warga*')? 'active' : '' }}" href="/dashboard/warga">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Warga
          </a>
        </li>
      </ul>

      {{-- page ini hanya bisa di akses oleh admin yg sudh di atur di AppServiceProvider --}}
      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <a class="nav-link {{ Request::is('dashboard/user*')? 'active' : '' }}" href="/dashboard/user">
            <span data-feather="user-plus" class="align-text-bottom"></span>
            User
          </a>
        </ul>
      @endcan
    </div>
</nav>