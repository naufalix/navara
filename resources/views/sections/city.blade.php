<section id="city" class="py-5">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h5 class="text-info" lang-id="en1">Ensiklopedia</h5>
      <h2 class="h-bg" lang-id="en2">Budaya & Tradisi</h2>
      <p class="col-md-4 mx-auto">
        <i lang-id="en3">Temukan budaya-budaya dari seluruh penjuru Indonesia!</i>
      </p>
      <div class="d-flex justify-content-center">
        
        <select name="" id="selectcity2" class="form-control form-select rounded-6">
          <option selected disabled value="">Cari daerah atau kota</option>
          @foreach ($cities as $c)
            <option value="{{$loop->iteration}}">{{ $c->name }}</option>
          @endforeach
        </select>

      </div>
    </div>
  </div>
  
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      @foreach ($cities as $c)
      <div class="swiper-slide">
        <div class="container px-md-5">
          
          <div class="row px-5 justify-content-center pt-2">
            @foreach ($c->encyclopedia->sortBy('title') as $e)
              @if ($e->title!="youtube")   
                <div class="col-md-3 mt-4" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#encyclopedia{{ $e->id }}">
                  <div class="card mb-4">
                    <div>
                      <img class="img-overlay" src="assets/img/img-overlay.png" alt="">
                      <img class="img-thumb card-img-top" src="assets/img/encyclopedia/{{ $e->image }}">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $e->title }}</h5>
                      <a href="#!" class="text-info">
                        Explore <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              @else
                <div class="col-md-3 mt-4" data-mdb-ripple-init="" data-mdb-modal-init="" data-mdb-target="#youtubeplayer" onclick="setyt('{{ $e->source }}')">
                  <div class="card mb-4" style="background-image: url('assets/img/encyclopedia/{{ $e->image }}'); background-size: cover; background-position: center;">
                    <div class="d-flex justify-content-center align-items-center h-100 rounded-3" style="background-color: #00000090;">
                      <div class="text-center">
                        <i class="fa fa-youtube-play fs-1 text-danger"></i>
                        <p class="text-white mb-0">Play Video</p>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>

        </div>

      </div>
      @endforeach

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  @foreach ($cities as $c)
    <!-- Modal -->

    @foreach ($c->encyclopedia as $e)
      <div class="modal fade" id="encyclopedia{{ $e->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header border-0 pb-0 d-flex">
              <button class="ms-auto border-0" type="button" data-mdb-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>
            <div class="modal-body py-0">
              <div class="row">
                <div class="col-12 col-md-5 d-flex">
                  <img src="/assets/img/encyclopedia/{{ $e->image }}" class="m-auto rounded-3" alt="" style="max-width: 300px">
                </div>
                <div class="col-12 col-md-7 text-center text-md-start">
                  <h3 class="my-4">{{ $e->title }}</h3>
                  <p>{{ $e->description }}</p>
                  <button type="button" class="btn btn-sm btn-primary mb-2">Lihat selengkapnya</button>
                </div>
              </div>
            </div>
            <div class="modal-footer border-0 pt-0">
              <span style="font-size: 12px">
                Sumber : <a href="{{ $e->source }}" target="_blank">{{ parse_url($e->source, PHP_URL_HOST) }}</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach

  <div class="modal fade" id="youtubeplayer" tabindex="-1" aria-labelledby="youtubeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="ratio ratio-16x9">
            <iframe src="" title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>