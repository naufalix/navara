@extends('layouts.index')

@section('content')
  @include('sections.gallery2')
  @include('sections.virtual')
@endsection

@section('script')
  <script>
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
    $('#basicExample').on('click', 'div', function (event) {
      const imageUrl = $(this).data('image');
      $('#modalImage').attr('src', imageUrl);
      $('#imageModal').modal('show');
    });

    // Initialize Swiper
    var swiper2 = new Swiper(".mySwiper2", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true
      },
      keyboard: {
        enabled: true
      },
      mousewheel: {
        thresholdDelta: 70
      },
      spaceBetween: 60,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });

    // Function set virtual tour
    function setvr(virtual,maps){
      pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "/assets/img/virtual/"+virtual
      });
      $('.gmaps').attr('href', maps);
    }
  </script>
@endsection