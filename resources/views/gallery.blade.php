@extends('galleryBase')

@section('Galleries')
<div class="gallery">
  <div class="gal-slider">
    coba
  </div>
  <div class="gal-main">
    <div class="__header">headers</div>
    <div class="__body __c-main">
      <div class="__grid-container">

        <div class="__grid-item">
          <img src="../assets/gal-bg.png" alt="thumbs">
          <div class="__c-desc">
            <div class="title">Judul album pertama</div>
          </div>
        </div>

        <div class="__grid-item">
          <img src="../assets/gal-bg.png" alt="thumbs">
          <div class="__c-desc">
            <div class="title">Judul album kedua</div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="c-view-album">
    <div class="overlay-bg"></div>
    <div class="c-album-main">
      <div class="viewer-header">
        <div class="title">title</div>
        <div class="tools"><img class="btn-img" src="{{ asset('/assets/icons/btn-icon-close.svg') }}" alt="b_close"></div>
      </div>
    </div>
  </div>
</div>
@endsection