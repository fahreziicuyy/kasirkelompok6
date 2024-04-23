<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ url($setting->path_logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $setting->nama_perusahaan }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url(auth()->user()->foto) }}" class="img-circle img-profil elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profil') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              @if (auth()->user()->level == 0)
                  
              
              <li class="nav-header">KASIR</li>
              <li class="nav-item">
                <a href="{{ route('kategori.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-cube"></i>
                  <p>
                    Kategori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('produk.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-cubes"></i>
                  <p>
                    Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('member.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-address-card"></i>
                  <p>
                    Member
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('supplier.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-truck"></i>
                  <p>
                    Supplier
                  </p>
                </a>
              </li>
              <li class="nav-header">TRANSAKSI</li>
              <li class="nav-item">
                <a href="{{ route('pengeluaran.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-credit-card"></i>
                  <p>
                    Pengeluaran
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pembelian.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-download"></i>
                  <p>
                    Pembelian
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-upload"></i>
                  <p>
                    Penjualan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>
                    Transaksi Aktif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.baru') }}" class="nav-link">
                    <i class="nav-icon fa fa-cart-plus"></i>
                  <p>
                    Transaksi Baru
                  </p>
                </a>
              </li>
              <li class="nav-header">LAPORAN</li>
              <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-flag"></i>
                  <p>
                    Laporan
                  </p>
                </a>
              </li>
              <li class="nav-header">PENGATURAN</li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('setting.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-cogs"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
              </li>
              @else
              <li class="nav-item">
                <a href="{{ route('transaksi.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>
                    Transaksi Aktif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.baru') }}" class="nav-link">
                    <i class="nav-icon fa fa-cart-plus"></i>
                  <p>
                    Transaksi Baru
                  </p>
                </a>
              </li>
              @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>