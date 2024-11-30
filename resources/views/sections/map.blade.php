<style>
  
</style>

<section id="maps" class="pb-0">
  <div class="cloud cloud1">
  <div class="cloud cloud1x">
  <div class="cloud cloud2">
  <div class="cloud cloud2x">
  <div class="cloud cloud3 pb-5">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-title aos-init aos-animate" data-aos="zoom-out">
        <h5 class="text-info" lang-id="mp1">Jelajahi</h5>
        <h2 class=" text-white" lang-id="mp2">Peta Interaktif</h2>
        <p class="col-md-4 mx-auto" style="color: #EEEEEE">
          <i lang-id="mp3">Rasakan pengalaman menjelajah Budaya Nusantara dengan ujung jari Anda!</i>
        </p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 mx-auto">
          <div class="card rounded-7 bg-primary">
            <div class="card-body">
              <select name="" id="searchcity" class="form-control form-select rounded-6">
                <option selected disabled value="" lang-id="mp4">Cari Daerah atau Kota disini...</option>
                @foreach ($cities as $c)
                  <option value="{{$c['latitude']}},{{$c['longitude']}}">{{ $c['name'] }}</option>
                @endforeach
              </select>
              <br>
              <div id="map" class="rounded-6 mt-3" style="width: 100%; height: 400px;"></div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>