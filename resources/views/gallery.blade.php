@extends('galleryBase')

@section('Galleries')
<main class="gallery">
  <div class="gal-slider">
    <img src="{{ url(asset('public/assets/vectors/album-cover.png'))}}">
  </div>
  <div class="gal-main">
    <div class="__header">
      <h2>Koleksi Album</h2>
    </div>
    <div class="__body __c-main">
      <div class="__grid-container">

        @foreach ($albums as $item)
          
          <div class="__grid-item __album" albumId="{{$item->id}}">
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
  </div>
</main>
@endsection

@push('bodyResouces')
<script>
  const host = window.location.protocol + "//" + window.location.host;
  const albums = document.querySelectorAll('.__grid-item');


  for (let index = 0; index < albums.length; index++) {
    const el = albums[index];
    const albumId = el.getAttribute('albumId');
    __get_gallery(albumId, el);
    // el.addEventListener('click', function (el) {
    //   if (el.target.localName === 'img') {
    //     parent = el.target.parentElement
    //     albumId = parent.getAttribute('albumId')
    //     __get_gallery(albumId)
    //   }
    // })
  }

  async function __get_gallery(albumId, el) {
    const response = await fetch(`${'gallery/get-album-content-items/'+albumId}`,
      {
        method: 'GET'
      })

    const data = await response.json()
    if (data.length > 1) {
      let t_bk = document.createElement('img');
      let t_fr = document.createElement('img');
      t_bk.src = `${host + '/sofifi/public/photos/'+data[0].file_uri}`
      t_fr.src = `${host + '/sofifi/public/photos/'+data[1].file_uri}`
      const c_bk = el.querySelector('.__thumb-bk')
      const c_fr = el.querySelector('.__thumb-fr')
      c_bk.appendChild(t_bk)
      c_fr.appendChild(t_fr)
    } 
  }
  </script>
@endpush