@extends('layouts.index')

@section('content')
<div style="height: 100px"></div>
  @include('sections.history-nusantara')
  {{-- <section style="background: linear-gradient(to bottom, #E2EAF7, #FFFFFF); height: 0px"> --}}

  {{-- </section> --}}
  @include('sections.history-marines')
@endsection

@section('script')

@endsection