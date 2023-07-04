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

        <div class="__grid-item" albumId="albumId-1">
          <img src="../assets/vectors/gal-bg.png" alt="thumbs">
          <div class="__c-desc">
            <div class="title">Judul album pertama</div>
          </div>
        </div>

        <div class="__grid-item" albumId="albumId-2">
          <img src="../assets/vectors/gal-bg.png" alt="thumbs">
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
        <div class="tools"><img class="btn-img" src="../assets/vectors/btn-icon-close.svg" alt="b_close"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('bodyResouces')
<script>
    const host = window.location.host
    const albums = document.querySelectorAll('.__grid-item');

    for (let index = 0; index < albums.length; index++) {
      const el = albums[index];
      el.addEventListener('click', function (el) {
        if (el.target.localName === 'img') {
          parent = el.target.parentElement
          albumId = parent.getAttribute('albumId')
          __get_gallery(albumId)
        }
      })
    }

    async function __get_gallery(albumId) {
      const response = await fetch('http://dev.local:8000/pages/gallery/get-album-content/idAlbum',
        {
          method: 'GET'
        })

      const data = await response.json()
      console.log(data)
    }
  </script>
@endpush