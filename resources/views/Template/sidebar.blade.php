<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="{{ asset('GambarTaro/tps_food.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('GambarTaro/taro.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
<<<<<<< HEAD
          <a href="#" class="d-block">{{ auth()->user()->name }}, {{ auth()->user()->level}}</a>
=======
          <a href="#" class="d-block">{{ auth()->user()->name }} , {{ auth()->user()->level }} </a>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-bars"></i>
              <p>
               Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

<<<<<<< HEAD
            <li class="nav-item">
                <a href="{{ url('beranda') }}" class="nav-link">
                <i class="fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{ route('halaman-satu') }}" class="nav-link">
                <i class="fas fa-keyboard"></i>
                  <p>Input Data</p>
                </a>
              </li>

              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{ route('halaman-dua') }}" class="nav-link">
                <i class="fas fa-list"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ route('halaman-tiga') }}" class="nav-link">
                <i class="fas fa-images"></i>
                  <p>Data Iklan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-empat') }}" class="nav-link">
                <i class="fas fa-user-circle"></i>
                  <p>Informasi Akun </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>======================== </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('form-lembur') }}" class="nav-link">
                <i class="fas fa-keyboard"></i>
                  <p> Form Input Data Lembur</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('status') }}" class="nav-link">
                <i class="fas fa-tasks"></i>
                  <p> Status </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-enam') }}" class="nav-link">
                <i class="fas fa-database"></i>
                  <p> Data Lembur A </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-enam') }}" class="nav-link">
                <i class="fas fa-database"></i>
                  <p> Data Lembur B </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-enam') }}" class="nav-link">
                <i class="fas fa-database"></i>
                  <p> Data Lembur C </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-enam') }}" class="nav-link">
                <i class="fas fa-database"></i>
                  <p> Data Lembur D </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-enam') }}" class="nav-link">
                <i class="fas fa-database"></i>
                  <p> Data Lembur E </p>
                </a>
              </li>

              
              @endif

            

=======
            <!-- @if (auth()->user()->level == "pemilik")
            <li class="nav-item">
                <a href="{{ route('registrasi') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Halaman Registrasi</p>
                </a>
              </li>
              @endif -->

              <li class="nav-item">
                <a href="{{ route('halaman-satu') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Halaman 1 form lembur</p>
                </a>
              </li>

              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{ route('halaman-dua') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Halaman 2 accept ajuan lembur / Supervisor</p>
                </a>
              </li>
              @endif

>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
               Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>