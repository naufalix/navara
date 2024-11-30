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
          <li><a class="nav-link" lang-id="nv1" href="#hero">Beranda</a></li>
          <li><a class="nav-link" lang-id="nv2" href="#maps">Peta interaktif</a></li>
          <li><a class="nav-link" lang-id="nv3" href="#city">Budaya & Tradisi</a></li>
          <li><a class="nav-link" lang-id="nv4" href="#virtual">Tur Virtual</a></li>
          <li><a class="nav-link" lang-id="nv5" href="#testimonial">Ulasan</a></li>
          
          <li id="day" class="theme">
            <button class="nav-link" onclick="changetheme('nyx')"><i class="bi bi-sun"></i></button>
          </li>
          <li id="nyx" class="theme" style="display: none">
            <button class="nav-link" onclick="changetheme('day')"><i class="bi bi-moon"></i></button>
          </li>

          <li id="lang_id" class="lang">
            <button class="nav-link" onclick="language('en')"><img src="/assets/img/flag_id.svg" alt=""></button>
          </li>
          <li id="lang_en" class="lang" style="display: none">
            <button class="nav-link" onclick="language('id')"><img src="/assets/img/flag_en.svg" alt=""></button>
          </li>
          
          <li class="nav-item dropdown ms-auto d-none">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              My Projects
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#ms1">Project 1</a></li>
              <li><a class="dropdown-item" href="#ms2">Project 2</a></li>
              <li><a class="dropdown-item" href="#ms3">Project 3</a></li>
              <li><a class="dropdown-item" href="#ms4">Project 4</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    

  </script>