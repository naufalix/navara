<section id="gallery" class="py-5">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h5 class="text-info" lang-id="en1">Lorem ipsum</h5>
      <h2 class="h-bg" lang-id="en2">Galeri</h2>
      <p class="col-md-4 mx-auto">
        <i lang-id="en3">Mari kita jelajahi keindahan wisata budaya melalui tur virtual...</i>
      </p>
    </div>
  </div>

  <div class="container">
    <div id="basicExample">
      @foreach ($virtuals as $v)
      <div class="rounded-5"  data-mdb-modal-init data-mdb-target="#modal-vr" style="cursor: pointer" onclick="setvr('{{ $v->virtual }}','{{ $v->maps }}')">
        <img alt="{{$v->name}}" src="assets/img/virtual/{{$v->image}}?.webp" />
      </div>
      @endforeach
    </div>
  </div>

  <div class="section-title aos-init aos-animate" data-aos="zoom-out">
    <p class="fs-5 text-center pt-4 mt-4 mb-0">
      <i lang-id="vr4">...dan biarkan Indonesia meninggalkan kesan mendalam di perjalananmu.</i>
    </p>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal-vr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          {{-- <button type="button" class="btn-close p-2" data-mdb-dismiss="modal" aria-label="Close"></button> --}}
          <a class="btn-icon px-2 py-1 vr-close" data-mdb-dismiss="modal"><i class="bi bi-x-lg"></i></a>
          <a class="gmaps px-2 py-1" href="" target="_blank">View on google maps</a>
          <div id="panorama"></div>
        </div>
      </div>
    </div>
  </div>

</section>


