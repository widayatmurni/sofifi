@extends('articlesBase')

@section('Articles')
<div class="header header--fixed">
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
      <img class="icon-back" style="width: 40px" src="{{ url(asset('assets/vectors/btn_home.png'))}}" alt="back">
    </a>
  </div>
</div>
<main role="main">
  {!! html_entity_decode($buletin['content']) !!}    
</main>

@endsection