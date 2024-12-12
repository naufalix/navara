<section id="nusantara" class="py-5">
  <div style="height: 100px"></div>

  <div class="container aos-init aos-animate mb-5" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h2 class="h-bg" lang-id="en2">Sejarah Hari Nusantara</h2>
    </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 d-flex m-auto">
        <img class="mx-auto" src="assets/img/logo-2024.png" alt="" style="width: 80%">
      </div>
      <div class="col-md-6">
        <p style="text-align: justify">
          Hari Nusantara jatuh pada tanggal 13 Desember yang diperingati setiap tahunnya berawal dari Deklarasi Djuanda pada tanggal 13 Desember 1957 yang menyatakan kepada dunia bahwa laut Indonesia di antara dan di dalam kepulauan Indonesia menjadi satu kesatuan wilayah NKRI. Pernyataan tersebut disampaikan langsung oleh Perdana Menteri Indonesia Djuanda Kartawidjaya.
        </p>
        <p style="text-align: justify">
          Setelah konsepsi negara kepulauan dapat diterima dan ditetapkan dalam konvensi hukum laut internasional (United Nations Convention On The Law of The Sea, UNCLOS) oleh PBB tahun 1982. Deklarasi ini dipertegas kembali dalam UU No. 17 tahun 1985 tentang Pengesahan UNCLOS 1982 bahwa Indonesia adalah negara kepulauan. Adanya Deklarasi Djuanda tersebut, luas wilayah Republik Indonesia menjadi 2,5 kali lipat dari luas sebelumnya yaitu 2.027.087 km2 menjadi 5.193.250 km2.
        </p>
        <p style="text-align: justify">
          Bertolak dari Deklarasi Djuanda tersebut, maka pada tanggal 13 Desember 1999 dicanangkan sebagai "Hari Nusantara". Dan dua tahun kemudian, pada tanggal 11 Desember 2001, Presiden RI Megawati Soekarnoputri, melalui Surat Keputusan Presiden Nomor 126 Tahun 2001, menetapkan bahwa tanggal 13 Desember dinyatakan sebagai "Hari Nusantara", dan resmi dinyatakan sebagai hari perayaan nasional yang diperingati setiap tahun.
        </p>
        <div class="pt-4" style="float: right; font-size: 12px;">
          <span lang-id="ab4">Sumber: </span>
          </span><a class="text-info" href="https://bkd.jogjaprov.go.id/informasi-publik/berita/peringatan-hari-nusantara-momentum-peningkatan-ekonomi-maritim" target="_blank">bkd.jogjaprov.go.id</a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container aos-init aos-animate mb-5" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h2 class="h-bg">Riwayat Hari Nusantara</h2>
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
                ['year' => '2021','place' => 'DIY',],
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
                <p class="text-muted d-none">
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