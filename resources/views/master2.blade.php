<!DOCTYPE html>
<html lang="en">

@include('header')
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">5026221144 Alfa Renaldo Aluska</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/nilai">Nilai Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/belanja">Keranjang Belanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bus">Bus (Pra-EAS)</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Tugas-Tugas
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="/nilai">Nilai Kuliah</a>
              <a class="dropdown-item"  href="/belanja">Keranjang Belanja</a>
              <a class="dropdown-item" href="/bus">Bus (Pra-EAS)</a>
            </div>
          </li>
        </ul>
      </nav>

    <div class="container">

        @yield('konten')

        @include('footer')
    </div>

</body>

</html>
