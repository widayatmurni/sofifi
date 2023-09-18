@extends('galleryBase') 
@push('headerResources')
<link href="{{ asset('assets/bootstrap-5.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/bootstrap-5.0-dist/js/bootstrap.js')}}"></script>
@endpush
@section('Galleries')
    @if($photos->isEmpty())
    <div class="container mt-4">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>
      
      <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div>
          Belum ada koleksi !! <a href="{{ route('gallery.album') }}" class="alert-link">Kembali saja.</a>
        </div>
      </div>
    </div>
    @else
    <div class="container">
      <div class="jumbotron">
        <h1>{{ $photos[0]['nama_album'] }}</h1>
        <p>{{ $photos[0]['album_deskripsi'] }}</p>
      </div>
      
      <div class="row">
        @foreach ($photos as $item)
          <div class="col-sm-6 col-md-4 mb-3">
            <img src="{{ asset('photos/' . $item->file_uri)}}" alt="" class="fluid img-thumbnail">      
          </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
@endsection