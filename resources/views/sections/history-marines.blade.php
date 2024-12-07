<section id="maritim" class="py-5" >

  <div class="container aos-init aos-animate mb-5" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h2 class="h-bg" lang-id="en2">Sejarah Maritim Indonesia</h2>
    </div>
  </div>

  <div class="container px-4 horizontal-timeline">
    <ul class="timeline-with-icons">
      @foreach ($marines as $m)
      <li class="timeline-item mb-5">
        <span class="timeline-icon">
          <i class="{{ $m['icon'] }} text-info fa-sm fa-fw"></i>
        </span>
        <h5 class="fw-bold">{{ $m['title'] }}</h5>
        <p class="text-muted mb-2 fw-bold"><span>Tahun</span> {{ $m['year'] }}</p>
        <div class="text-muted markdown" style="text-align: justify">
          {!! Illuminate\Support\Str::markdown($m['body']) !!}
        </div>
      </li>
      @endforeach
    </ul>
    <div class="text-center">
      <p>
        Sumber : 
        <a class="text-info fs-7" href="https://kompaspedia.kompas.id/baca/paparan-topik/kedaulatan-maritim-indonesia-sejarah-dan-potretnya" target="_blank">
          kompaspedia.kompas.id
        </a>
      </p>
    </div>
  </div>

</section>
