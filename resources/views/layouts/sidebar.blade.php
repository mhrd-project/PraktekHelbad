<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('image/foto.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Hilmy</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a id="dashboard"  href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>           
        </li>
        <li class="nav-item">
          <a id="barang" href="/barang" class="nav-link">
            <i class="nav-icon fas fa-fw fa-folder-open"></i>
            <span>Barang</span>
          </a>
        </li> 
        <li class="nav-item">
          <a id="pembelian" href="/pembelian" class="nav-link">
            <i class="nav-icon fas fa-fw fa-shopping-basket"></i>
            <span>Pembelian</span>
          </a>
        </li> 
        <li class="nav-item">
          <a id="penjualan" href="/penjualan" class="nav-link">
            <i class="nav-icon fas fa-fw fa-shopping-cart"></i>
            <span>Penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout" class="nav-link">
            <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span>
          </a>
        </li>   
      </ul>
    </nav>
  </div>
</aside>
  