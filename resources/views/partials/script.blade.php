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
<script src="assets/js/script.js"></script>
<script src="assets/js/languages.js"></script>

<script>
  
  $(document).ready(function () {
    checkThemeSession();
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
  $('#selectfont').on('change', function() {
    font = $(this).val();
    if (font === 'jawa') {
      $('body').addClass('jawa');
    } else {
      $('body').removeClass('jawa');
    }
    localStorage.setItem('font', font);
  });

  // Function change font from session if any
  function checkThemeSession() {
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

  // var swiper2 = new Swiper(".mySwiper2", {
  //   effect: "coverflow",
  //   grabCursor: true,
  //   centeredSlides: true,
  //   slidesPerView: "auto",
  //   coverflowEffect: {
  //     rotate: 0,
  //     stretch: 0,
  //     depth: 100,
  //     modifier: 2,
  //     slideShadows: true
  //   },
  //   keyboard: {
  //     enabled: true
  //   },
  //   mousewheel: {
  //     thresholdDelta: 70
  //   },
  //   spaceBetween: 60,
  //   loop: true,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true
  //   }
  // });

  // var swiper4 = new Swiper(".mySwiper4", {
  //   slidesPerView: 1,
  //   spaceBetween: 30,
  //   speed: 1000,
  //   autoplay: {
  //     delay: 4000,
  //     disableOnInteraction: false,
  //   },
  //   navigation: {
  //     nextEl: ".quotes-next",
  //     prevEl: ".quotes-prev",
  //   },
  // });

  // Function set youtube video
  function setyt(url){
    $('#youtubeplayer iframe').attr('src', url);
  }
  $('#youtubeplayer').on('hidden.bs.modal', function () {
    $('#youtubeplayer iframe').attr('src', '');
  });
</script>