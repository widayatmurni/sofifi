@extends('articlesBase')

@push('headerResources')
  <link rel="stylesheet" href="{{ url(asset('public/assets/bootstrap-5.0-dist/css/bootstrap.min.css')) }}">  
  
@endpush

@section('Articles')
<div class="header header-fixed">
  <div class="logo">
    <h1 class="clearfix">
      <a href="" class="logo-title">
        <span class="title-text color-pry">Bu</span>
        <span class="title-text color-thr">sri</span>
        <span class="block-logo">
          <span class="title-break">Buletin</span>
          <span class="title-break">Serba</span>
          <span class="title-break">Imigrasi Ternate</span>
        </span>
      </a>
    </h1>
  </div>
  <div class="shared">
    <a href="{{ url('/pages/news')}}">
      <img class="icon-back" style="width: 40px" src="{{ url(asset('public/assets/vectors/btn_home.png'))}}" alt="back">
    </a>
  </div>
</div>
<main role="main" class="container-lg py-4">
  <div class="row">
    <div class="col">
      {!! html_entity_decode($buletin['content']) !!}    
    </div>
  </div>
</main>

@endsection