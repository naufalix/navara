<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/mdb/js/mdb.umd.min.js"></script>
<script src="assets/vendor/justified-gallery/justifiedGallery.min.js"></script>
<script src="assets/vendor/leaflet/leaflet.js"></script>
<script src="assets/vendor/leaflet/leaflet-providers.js"></script>
<script src="assets/vendor/select2/select2.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/pannellum/pannellum.js"></script>

<!-- Main JS File -->
<script src="assets/js/languages.js"></script>

<script>
  
  $(document).ready(function () {
    checkThemeSession();
    checkFontSession();
  });

  // Navbar change background color when scrolled
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
  });
 
  // Function change theme
  function changetheme(theme) {
    $('.theme').css('display', 'none');
    $('#' + theme).css('display', 'block');
    if (theme === 'nyx') {
      $('body').addClass('dark');
      $('.navbar').addClass('navbar-dark');
      //L.tileLayer.provider('Stadia.AlidadeSmoothDark').addTo(map);
    } else {
      $('body').removeClass('dark');
      $('.navbar').removeClass('navbar-dark');
      //L.tileLayer.provider('CyclOSM').addTo(map);
    }
    localStorage.setItem('theme', theme);
  }

  // Function change theme from session if any
  function checkThemeSession() {
    var savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'nyx') {
      $('body').addClass('dark');
      $('.navbar').addClass('navbar-dark');
      $('#day').css('display', 'none');
      $('#nyx').css('display', 'block');
      //L.tileLayer.provider('Stadia.AlidadeSmoothDark').addTo(map);
    } else {
      $('body').removeClass('dark');
      $('.navbar').removeClass('navbar-dark');
      $('#nyx').css('display', 'none');
      $('#day').css('display', 'block');
    }
  }

  // Select font
  function selectfont(font) {
    if (font === 'jawa') {
      $('body').addClass('jawa');
    } else {
      $('body').removeClass('jawa');
    }
    localStorage.setItem('font', font);
  }

  // Function change font from session if any
  function checkFontSession() {
    var savedFont = localStorage.getItem('font');
    if (savedFont === 'jawa') {
      $('body').addClass('jawa');
      $('#selectfont').val('jawa');
    }
  }

  // Function change language
  function language(lang) {
    // Iterasi setiap item di dalam array languages
    languages.forEach(l => {
      // Akses properti bahasa berdasarkan nilai variabel lang
      const text = l[`lang_${lang}`];
      if (text) {
        $("[lang-id=" + l.id + "]").text(text);
      }
    });
  }

  // Function set youtube video
  function setyt(url){
    $('#youtubeplayer iframe').attr('src', url);
  }
  $('#youtubeplayer').on('hidden.bs.modal', function () {
    $('#youtubeplayer iframe').attr('src', '');
  });
</script>