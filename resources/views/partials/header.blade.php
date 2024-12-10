  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-nav fixed-top shadow-2">
    <div class="container">
      {{-- <a class="navbar-brand" href="#">Arunika Nusantara</a> --}}
      <a class="navbar-brand" href="#">
        <img src="/assets/img/logo.png" alt="Arunika Nusantara Logo" style="height: 40px;">
      </a>
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Dropdown -->
          <li><a class="nav-link" lang-id="nv1" href="index.html#hero">Beranda</a></li>
          <li><a class="nav-link" lang-id="nv2" href="index.html#maps">Peta interaktif</a></li>
          <li><a class="nav-link" lang-id="nv3" href="index.html#city">Budaya & Tradisi</a></li>
          <li><a class="nav-link" lang-id="nv4" href="index.html#gallery">Galeri</a></li>
          <li><a class="nav-link" lang-id="nv5" href="index.html#testimonial">Ulasan</a></li>

          <li class="nav-item dropdown ms-auto">
            <a class="nav-link dropdown-toggle" lang-id="nv6" href="" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Pilih bahasa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" onclick="language('id')">Indonesia</a></li>
              <li><a class="dropdown-item" onclick="language('en')">English</a></li>
              <li><a class="dropdown-item" onclick="language('jw')">Jawa</a></li>
              <li><a class="dropdown-item" onclick="language('my')">Melayu</a></li>
              <li><a class="dropdown-item" onclick="language('bj')">Banjar</a></li>
              <li><a class="dropdown-item" onclick="language('st')">Sentani</a></li>
            </ul>
          </li>

          <li>
            <button class="nav-link" data-mdb-collapse-init data-mdb-ripple-init data-mdb-target="#nv-s" aria-expanded="false" aria-controls="nv-s"><i class="fa fa-search"></i></button>
          </li>
          <li class="collapse" id="nv-s">
            <div class="d-flex h-100">
              <div class="my-auto">
                <select name="" id="searchnavbar" class="form-control form-select rounded-6">
                  <option selected disabled value="">Cari daerah atau kota</option>
                  @foreach ($cities as $c)
                    <option value="{{$c->latitude}},{{$c->longitude}}">{{ $c->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </li>
          
          <li id="day" class="theme">
            <button class="nav-link" onclick="changetheme('nyx')"><i class="bi bi-sun"></i></button>
          </li>
          <li id="nyx" class="theme" style="display: none">
            <button class="nav-link" onclick="changetheme('day')"><i class="bi bi-moon"></i></button>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <script>
    

  </script>