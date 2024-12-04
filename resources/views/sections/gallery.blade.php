<section id="gallery" class="py-5">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h5 class="text-info" lang-id="en1">Lorem ipsum</h5>
      <h2 class="h-bg" lang-id="en2">Galeri</h2>
      <p class="col-md-4 mx-auto">
        <i lang-id="en3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</i>
      </p>
    </div>
  </div>

  <div class="container">
    <div id="basicExample">
      @foreach ($galleries as $g)
      <div class="rounded-5" data-image="assets/img/gallery/{{$g['image']}}">
        <img alt="{{$g['title']}}" src="assets/img/gallery/{{$g['image']}}?.webp" />
      </div>
      @endforeach
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          <a class="btn-icon px-2 py-1 vr-close" data-dismiss="modal"><i class="bi bi-x-lg"></i></a>
          <img id="modalImage" src="" alt="Image" class="w-100" />
        </div>
      </div>
    </div>
  </div>

</section>


