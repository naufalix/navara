<section id="agenda" class="py-5">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h5 class="text-info" lang-id="ag1">IKUTI</h5>
      <h2 class="h-bg" lang-id="ag2">Agenda Kegiatan</h2>
      <p class="col-md-4 mx-auto">
        <i lang-id="ag3">Daftar kegiatan atau perayaan Hari Nusantara</i>
      </p>
    </div>
  </div>

  <div class="swiper mySwiper4 my-5">
    <div class="swiper-wrapper">

      @foreach ($agendas as $a)
      <div class="swiper-slide">
        <div class="container col-md-8">
          <div class="row">
            <div class="col-12 col-md-6 d-flex mb-4">
              <div class="card col-12">
                <div class="card-body d-flex">
                  <div class="my-auto text-center text-md-start">
                    <div class="city-info">
                      <h2 class="h1">{{ $a->title }}</h2>
                      <table class="">
                        <tr>
                          <td class="icon"><i class="fa fa-calendar"></i></td>
                          <td class="detail"><span class="ms-2">{{ $a->date }}</span></td>
                        </tr>
                        <tr>
                          <td class="icon"><i class="fa fa-map-marker"></i></td>
                          <td class="detail"><span class="ms-2">{{ $a->city }}</span></td>
                        </tr>
                        <tr>
                          <td class="icon"><i class="fa fa-money"></i></td>
                          <td class="detail"><span class="ms-2">{{ $a->price }}</span></td>
                        </tr>
                      </table>
                    
                    </div>
                    <div class="d-flex mt-4">
                      <div class="mx-auto mx-md-0">
                        <a href="{{$a->source}}" class="btn btn-info btn-sm shadow-0" target="_blank">Detail</a>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 d-flex mb-4">
              <img src="/assets/img/agenda/{{$a->image}}" class="m-auto rounded-3" alt="">
            </div>
      
          </div>
        </div>

      </div>
      @endforeach

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

</section>


