@extends('layouts.dashboard')

@section('content')

<div class="card mb-2">
  <!--begin::Card Body-->
  <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
    <!--begin::Section-->
    <div>
      <!--begin::Heading-->
      <div class="col-12 d-flex">
        <h1 class="anchor fw-bolder mb-5" id="striped-rounded-bordered">Manage Virtual</h1>
        <button class="ms-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
      </div>
      <!--end::Heading-->
      <!--begin::Block-->
      <div class="my-5 table-responsive">
        <table id="myTable" class="table table-striped table-hover table-rounded border gs-7">
          <thead>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
              <th>No.</th>
              <th style="min-width: 150px">Nama</th>
              <th>Kategori</th>
              <th style="min-width: 100px">Maps</th>
              <th>Virtual</th>
              <th style="min-width: 120px">Kota</th>
              <th style="min-width: 120px">Terakhir diubah</th>
              <th style="min-width: 90px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($virtuals as $v)
            @php
              $updated = date_create($v->updated_at);
            @endphp
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>
                <div class="symbol symbol-30px me-5" data-bs-toggle="modal" data-bs-target="#foto" onclick="foto('{{ $v->image }}')">
                  <img src="/assets/img/virtual/{{ $v->image }}" class="h-30 align-self-center of-cover rounded-0" alt="">
                </div>
                {{ $v->name }}  
              </td>
              <td>{{ $v->category }}</td>
              <td>
                <a target="_blank" href="{{ $v->maps }}" class="btn btn-white py-1 px-2 fs-7" style="border: 1px solid #E4E6EF;">
                  <img src="/assets/img/gmaps.png" style="width:16px; margin: -1px 2px 0px 0px;"> Google Maps
                </a>
              </td>
              <td>
                <div class="symbol symbol-30px me-5" data-bs-toggle="modal" data-bs-target="#fotovr" onclick="fotovr('{{ $v->virtual }}')">
                  <img src="/assets/img/virtual/{{ $v->virtual }}" class="h-30 align-self-center of-cover rounded-0" alt="">
                </div>
              </td>
              <td>
                <span class="btn btn-primary py-1 px-2 fs-7">{{ $v->city }}</span>
              </td>
              <td>{{date_format($updated,"d/m/Y H:i")}}</td>
              <td>
                <a href="#" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit" onclick="edit({{ $v->id }})"><i class="bi bi-pencil-fill"></i></a>
                <a href="#" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#virtual" onclick="virtual({{ $v->id }})"><i class="bi bi-image"></i></a>
                <a href="#" class="btn btn-icon btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus" onclick="hapus({{ $v->id }})"><i class="fa fa-times"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!--end::Block-->
    </div>
    <!--end::Section-->
  </div>
  <!--end::Card Body-->
</div>

<div class="modal fade" tabindex="-1" id="tambah">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Tambah Virtual tour</h3>
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x-lg"></i>
        </div>
      </div>

      <form class="form" method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row g-9">
            <div class="col-12 col-md-4">
              <label class="required fw-bold mb-2">Nama tempat</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-12 col-md-4">
              <label class="required fw-bold mb-2">Kategori</label>
              <input type="text" class="form-control" name="category" required>
            </div>
            <div class="col-12 col-md-4">
              <label class="required fw-bold mb-2">Foto</label>
              <input type="file" class="form-control" name="image" required>
            </div>
            <div class="col-12 col-md-8">
              <label class="required fw-bold mb-2">Link Google Maps</label>
              <input type="text" class="form-control" name="maps" required>
            </div>
            <div class="col-12 col-md-4">
              <label class="required fw-bold mb-2">Kota</label>
              <input type="text" class="form-control" name="city" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="submit" value="store">Submit</button>
        </div>
      </form>  
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id="edit">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="et">Edit Virtual tour</h3>
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
          </div>
        </div>
        <form class="form" method="post" action="" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="eid" name="id">
          <div class="modal-body">
            <div class="row g-9">
              <div class="col-12 col-md-4">
                <label class="required fw-bold mb-2">Nama tempat</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="col-12 col-md-4">
                <label class="required fw-bold mb-2">Kategori</label>
                <input type="text" class="form-control" name="category" required>
              </div>
              <div class="col-12 col-md-4">
                <label class="fw-bold mb-2">Upload Foto</label>
                <input type="file" class="form-control" name="image">
              </div>
              <div class="col-12 col-md-8">
                <label class="required fw-bold mb-2">Link Google Maps</label>
                <input type="text" class="form-control" name="maps" required>
              </div>
              <div class="col-12 col-md-4">
                <label class="required fw-bold mb-2">Kota</label>
                <input type="text" class="form-control" name="city" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="submit" value="update">Simpan</button>
          </div>
        </form>
      </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id="virtual">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="vt">Edit Virtual 360</h3>
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
          </div>
        </div>
        <form class="form" method="post" action="" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="vid" name="id">
          <div class="modal-body">
            <div class="row g-9">
              <div class="col-12">
                <label class="required fw-bold mb-2">Upload Foto 360°</label>
                <input type="file" class="form-control" name="virtual">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="submit" value="virtual">Simpan</button>
          </div>
        </form>
      </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id="hapus">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Hapus Virtual tour</h3>
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
          </div>
        </div>
        <form class="form" method="post" action="">
          @csrf
          <div class="modal-body text-center">
            <input type="hidden" class="d-none" id="hi" name="id">
            <p class="fw-bold mb-2 fs-3">"<span id="hd"></span>"</p>
            <p class="mb-2 fs-4">Apakah anda yakin ingin menghapus Virtual tour ini?</p>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger" name="submit" value="destroy">Hapus</button>
          </div>
        </form>
      </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id="foto">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="ft">View image</h3>
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
          </div>
        </div>
        <div class="modal-body">
          <img id="img-view" src="" style="width:100%">
        </div>
      </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" id="fotovr">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">View image</h3>
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
          </div>
        </div>
        <div class="modal-body">
          <img id="vr-view" src="" style="width:100%">
        </div>
      </div>
  </div>
</div>

<script type="text/javascript">

  function foto(image){
    $("#img-view").attr("src","/assets/img/virtual/"+image);
  }
  function fotovr(image){
    $("#vr-view").attr("src","/assets/img/virtual/"+image);
  }
  function edit(id){
    $.ajax({
      url: "/api/virtual/"+id,
      type: 'GET',
      dataType: 'json', // added data type
      success: function(response) {
        var mydata = response.data;
        $('#edit input[name="id"]').val(id);
        $('#edit input[name="name"]').val(mydata.name);
        $('#edit input[name="maps"]').val(mydata.maps);
        $('#edit input[name="category"]').val(mydata.category);
        $('#edit input[name="city"]').val(mydata.city);
        $("#et").text("Edit "+mydata.name);
      }
    });
  }
  function virtual(id){
    $('#virtual input[name="id"]').val(id);
  }
  function hapus(id){
    $.ajax({
      url: "/api/vitual/"+id,
      type: 'GET',
      dataType: 'json', // added data type
      success: function(response) {
        //alert(JSON.stringify(mydata));
        var mydata = response.data;
        $("#hi").val(id);
        $("#hd").text(mydata.name);
      }
    });
  }
</script>
@endsection