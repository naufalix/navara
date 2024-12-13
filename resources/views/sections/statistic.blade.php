<section id="statistic" class="pb-0">
  <div class="container">
    <div class="row">
      @php
        $stats = [
          ['count' => 718, 'name' => 'Bahasa daerah', 'image' => 's3.webp'],
          ['count' => 5300, 'name' => 'Kuliner khas', 'image' => 's4.webp'],
          ['count' => 1300, 'name' => 'Suku bangsa', 'image' => 's2.webp'],
          ['count' => 1239, 'name' => 'Warisan budaya', 'image' => 's1.webp'],
        ];
      @endphp

      @foreach ($stats as $s)
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="p-3 d-flex">
              <div class="my-auto">
                <img class="rounded-circle" src="assets/img/{{$s['image']}}" alt="" style="width: 50px;">
              </div>
              <div class="mx-3">
                <p class="mb-0 h4 counter">{{ $s['count'] }}</p>
                <p class="mb-0" lang-id="st{{ str_replace('.webp', '', $s['image'])[1] }}">{{ $s['name'] }}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>