@extends('layouts.index')

@section('content')
  @include('sections.hero')
  <div class="sea-bg">
    @include('sections.statistic')
    @include('sections.about')
  </div>
  @include('sections.map')
  @include('sections.city')
  @include('sections.gallery')
  @include('sections.agenda')
  {{-- @include('sections.virtual') --}}
  {{-- @include('sections.testimonial') --}}
@endsection

@section('script')
<script>
  // Initialize JustifiedGallery
  $('#basicExample').justifiedGallery({
    rowHeight: 200,
    lastRow: 'center',
    margins: 15,
    sizeRangeSuffixes: {
      'lt100': '_t',
      'lt240': '_m',
      'lt320': '_n',
      'lt500': '',
      'lt640': '_z',
      'lt1024': '_b'
    }
  })
  $('#basicExample').on('click', 'div', function (event) {
    const imageUrl = $(this).data('image');
    $('#modalImage').attr('src', imageUrl);
    $('#imageModal').modal('show');
  });
</script>  
@endsection