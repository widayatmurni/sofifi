@extends('galleryBase')

@section('Galleries')
<main class="gallery">
  <div class="gal-slider">
    <img src="{{ url(asset('assets/vectors/album-cover.png'))}}">
  </div>
  <div class="gal-main">
    <div class="__header">
      <h2>Koleksi Album</h2>
    </div>
    <div class="__body __c-main">
      <div class="__grid-container">

        @foreach ($albums as $item)
          
          <div class="__grid-item __album" albumId="albumId-1">
            <a href="{{ route('get.album.content', $item->id)}}" class="__album-thumb">
              <div class="__thumb-prev __thumb-bk"></div>
              <div class="__thumb-prev __thumb-fr"></div>
            </a>
            <div class="__album-desc">
                <div class="__desc-boby">
                    <div class="__desc-text">{{ $item->title }}</div>
                </div>
            </div>
          </div>

        @endforeach

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

  <div class="float-menu">
    <div class="float-menu">
      <a href="dashboard" class="nav-single">
        <i class="icon-dashboard"></i>
        <span class="nav-text">Dashboard</span>
      </a>
    </div>
</main>
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