@extends('layouts.index')

@section('content')
  @include('sections.hero')
  <div class="sea-bg">
    @include('sections.statistic')
    @include('sections.about')
  </div>
  @include('sections.map')
  @include('sections.city')
  {{-- @include('sections.quotes') --}}
  {{-- @include('sections.virtual') --}}
  {{-- @include('sections.testimonial') --}}
@endsection

@section('script')

@endsection