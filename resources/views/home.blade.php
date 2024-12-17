@extends('layouts.index')

@section('content')
  @include('sections.hero')
  <div class="sea-bg">
    @include('sections.statistic')
    @include('sections.about')
  </div>
  @include('sections.map')
  @include('sections.city')
  @include('sections.gallery')
  @include('sections.agenda')
  @include('sections.testimonial')
@endsection

@section('script')
<script>

  // Function setup counters for statistic
  function setupCounters() {
    // Buat observer untuk mendeteksi elemen yang masuk viewport
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Elemen terlihat, jalankan counter
          const element = $(entry.target);
          var countTo = parseInt(element.text(), 10);

          element.counter({
            duration: 4000,
            countFrom: 0,
            countTo: countTo,
            runOnce: true,
            placeholder: "?",
            easing: "easeOutCubic"
          });

          // Hentikan observasi untuk elemen ini agar tidak dijalankan ulang
          observer.unobserve(entry.target);
        }
      });
    });

    // Tambahkan semua elemen .counter ke dalam observer
    $('.counter').each(function () {
      observer.observe(this);
    });
  }
  setupCounters();

  // Initialize leaflet
  var map = L.map('map', {
    center: [-2.2, 118],
    zoom: 5
  });

  // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  L.tileLayer('https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
  // L.tileLayer.provider('Stadia.AlidadeSmoothDark').addTo(map);
  // L.tileLayer.provider('CyclOSM').addTo(map);
  // var CyclOSM = L.tileLayer('https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {
  //   maxZoom: 20,
  //   attribution: '<a href="https://github.com/cyclosm/cyclosm-cartocss-style/releases" title="CyclOSM - Open Bicycle render">CyclOSM</a> | Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  // });
  
  // Set leaflet marker
  @foreach ($cities as $c)
  var {{ str_replace(' ', '_', $c->name) }} = L.marker([{{ $c->latitude }}, {{ $c->longitude }}]).addTo(map).bindPopup(
    "<b>{{ $c->name }}</b><br><br><button class='btn btn-sm btn-info' onclick='pergi({{$loop->iteration}})'>Pergi</button>"
  );
  @endforeach

  // Function to handle button in map marker
  function pergi(id){
    var top = $("#city").position().top;
    $('html').scrollTop(top);
    swiper.slideTo(id-1);
    $("#city .btn-city").removeClass("btn-info").addClass("btn-outline-info");
    $(".c"+id).removeClass("btn-outline-info").addClass("btn-info");
  }
  function selectCity(id) {
    swiper.slideTo(id - 1);
    $("#city .btn-city").removeClass("btn-info").addClass("btn-outline-info");
    $(".c"+id).removeClass("btn-outline-info").addClass("btn-info");
  }

  // Initialize Select2
  $('#searchcity').select2();
  $('#searchcity').on('change', function() {
    let coordinate = $(this).val(); 
    let [lat, lng] = coordinate.split(',');
    map.panTo(new L.LatLng(lat, lng));
    map.setZoom(12);
    map.panTo(new L.LatLng(lat, lng));
  });
  $('#searchnavbar').select2();
  $('#searchnavbar').on('change', function() {
    let coordinate = $(this).val(); 
    let [lat, lng] = coordinate.split(',');
    map.panTo(new L.LatLng(lat, lng));
    map.setZoom(12);
    map.panTo(new L.LatLng(lat, lng));
    var top = $("#maps").position().top;
    $('html').scrollTop(top);
  });


  // Initialize Swiper for encyclopedia
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper4 = new Swiper(".mySwiper4", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Initialize Swiper for testimonial
  var swiper3 = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: @if($testimonials->count() >= 3) 3 @else 1 @endif,
        spaceBetween: 20,
      },
    },
    navigation: {
      nextEl: ".testimonial-next",
      prevEl: ".testimonial-prev",
    },
  });

  // Initialize JustifiedGallery
  $('#basicExample').justifiedGallery({
    rowHeight: 200,
    lastRow: 'center',
    margins: 15,
    sizeRangeSuffixes: {
      'lt100': '_t',
      'lt240': '_m',
      'lt320': '_n',
      'lt500': '',
      'lt640': '_z',
      'lt1024': '_b'
    }
  })

  // Function set virtual tour
  function setvr(virtual,maps){
    pannellum.viewer('panorama', {
      "type": "equirectangular",
      "panorama": "assets/img/virtual/"+virtual
    });
    $('.gmaps').attr('href', maps);
  }

</script>  
@endsection