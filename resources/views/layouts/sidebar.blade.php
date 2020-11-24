<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('frontend') }}/dist/img/logo.png" alt="Bapenda Logo" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light">Arsip Berkas</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Arsip Pendataan Pajak
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/airtanah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Air Tanah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hiburan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hiburan</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="/hotel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hotel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mineral" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mineral</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/parkir" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parkir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/peneranganjalan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerangan Jalan</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="/reklame" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reklame</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="/restoran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Restoran</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="/sarangburungwalet" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sarang Burung Walet</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Arsip Pendataan Lainnya
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/suratteguran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Teguran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratkeputusan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keputusan</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon" ></i>
                <p>
                  Berita Acara
                  <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="/suratpemasangan" class="nav-link">
                    <i></i>
                    <p>Pemasangan Alat Transaksi</p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="/suratpenarikan" class="nav-link">
                    <i></i>
                    <p>Penarikan Alat Transaksi</p>
                  </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log Out</p>
                </a>
              </li>
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  