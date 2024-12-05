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

  // Function change language
  function language(lang) {
    $('.lang').css('display', 'none');
    $('#lang_' + lang).css('display', 'block');

    // Ambil data JSON dari file /json/languages.json
    fetch('/json/languages.json')
      .then(response => response.json())
      .then(languages => {
        // Iterasi setiap item di dalam data JSON
        languages.forEach(l => {
          // Periksa bahasa yang dipilih
          if (lang === 'id') {
            // Ubah teks elemen berdasarkan lang_id
            $("[lang-id="+l.id+"]").text(l.lang_id);
          } else if (lang === 'en') {
            // Ubah teks elemen berdasarkan lang_en
            $("[lang-id="+l.id+"]").text(l.lang_en);
          }
        });
      })
      .catch(error => {
        console.error('Error loading languages:', error);
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

  // Function set virtual tour
  // function setvr(virtual,maps){
  //   pannellum.viewer('panorama', {
  //     "type": "equirectangular",
  //     "panorama": "/assets/img/virtual/"+virtual
  //   });
  //   $('.gmaps').attr('href', maps);
  // }

  // Function set youtube video
  function setyt(url){
    $('#youtubeplayer iframe').attr('src', url);
  }
  $('#youtubeplayer').on('hidden.bs.modal', function () {
    $('#youtubeplayer iframe').attr('src', '');
  });
</script>