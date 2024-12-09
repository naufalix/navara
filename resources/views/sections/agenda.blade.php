<section id="agenda" class="py-5">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-title aos-init aos-animate pb-2" data-aos="zoom-out">
      <h5 class="text-info" lang-id="en1">Lorem ipsum</h5>
      <h2 class="h-bg" lang-id="en2">Agenda Kegiatan</h2>
      <p class="col-md-4 mx-auto">
        <i lang-id="en3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</i>
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($agendas as $a)
        @if ($loop->iteration == 5)
          @break
        @endif
        <div class="col-md-6 mx-auto">
          <div class="card p-2 p-md-4 mb-4 rounded-6">
            <div class="d-flex">
              <div class="me-3 my-auto">
                <img src="/assets/img/agenda/{{$a->image}}" class="my-auto rounded-3" alt="">
              </div>
              <div class="text-start agenda-info my-auto"> 
                <h4 class="mb-0 fw-bold">{{$a->title}}</h4>
                <span class="badge rounded-pill badge-info">{{$a->price}}</span>
                <p class="mb-0">{{$a->date}}</p>
                <p class="mb-0"><i class="fa fa-bank"></i> {{$a->city}}</p>
              </div>
              <div class="ms-auto my-auto">
                <a class="btn btn-info btn-sm shadow-0" href="{{$a->source}}" target="_blank">Detail</a>
              </div>
  
            </div>
          </div>
        </div>  
      @endforeach
    </div>
  
    @if ($agendas->count()>4)
      <div class="d-flex mb-4">
        <button class="btn btn-info mx-auto shadow-0" data-mdb-collapse-init data-mdb-target="#collapseAgenda"
        aria-expanded="false" aria-controls="collapseAgenda">Muat lebih banyak</button>
      </div>

      <div class="collapse" id="collapseAgenda">
        <div class="row">
          @foreach ($agendas as $a)
            @if ($loop->iteration < 5)
              @continue
            @endif
            <div class="col-md-6 mx-auto">
              <div class="card p-2 p-md-4 mb-4 rounded-6">
                <div class="d-flex">
                  <div class="me-3 my-auto">
                    <img src="/assets/img/agenda/{{$a->image}}" class="my-auto rounded-3" alt="">
                  </div>
                  <div class="text-start agenda-info my-auto"> 
                    <h4 class="mb-0 fw-bold">{{$a->title}}</h4>
                    <span class="badge rounded-pill badge-info">{{$a->price}}</span>
                    <p class="mb-0">{{$a->date}}</p>
                    <p class="mb-0"><i class="fa fa-bank"></i> {{$a->city}}</p>
                  </div>
                  <div class="ms-auto my-auto">
                    <a class="btn btn-info btn-sm shadow-0" href="{{$a->source}}" target="_blank">Detail</a>
                  </div>
      
                </div>
              </div>
            </div>  
          @endforeach
        </div>
      </div>
    @endif

  </div>

  

</section>


