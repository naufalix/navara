<section id="nusantara" class="py-5">
  <div style="height: 100px"></div>

  <div class="container aos-init aos-animate mb-5" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h2 class="h-bg" lang-id="en2">Sejarah Hari Nusantara</h2>
    </div>
  </div>

  <div class="container-fluid py-5">

    <div class="row">
      <div class="col-lg-12">
  
        <div class="horizontal-timeline">
  
          <ul class="list-inline items text-center">
            @php
              $days = [
                ['year' => '2020','place' => 'Jakarta',],
                ['year' => '2021','place' => 'Gak tau',],
                ['year' => '2022','place' => 'Wakatobi',],
                ['year' => '2023','place' => 'Tidore',],
              ];
            @endphp
            @foreach ($days as $d)
            <li class="list-inline-item items-list">
              <div class="px-4">
                <div class="event-date badge bg-info">{{ $d['year'] }}</div>
                <h5 class="pt-2">{{ $d['place'] }}</h5>
                <img src="assets/img/logo-{{ $d['year'] }}.png" style="height: 100px">
                <p class="text-muted">
                  It will be as simple as occidental in fact it will be Occidental Cambridge friend
                </p>
              </div>
            </li>
            @endforeach
          </ul>
  
        </div>
  
      </div>
    </div>
  
  </div>

</section>