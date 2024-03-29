@php
  $nav = 'bulletin';     
@endphp

@extends('admin.layout')

@pushOnce('headerScript')
<script src="https://cdn.tiny.cloud/1/9kst2yubujraj0tbh7caiwvqk0qvpji3dgbqd9dah8i98x9b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endPushOnce

@section('contents')
<div class="d-flex justify-content-between mb-4">
  <div>
      <h4 class="card-title mb-0">Halaman Bulletin</h4>
  </div>
  {{-- <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      @php
          $firstLang = true
      @endphp
      @foreach ($languages as $lang)

        <input type="radio" class="btn-check" name="btnradio" id="{{ $lang->code }}" autocomplete="off" @checked($firstLang)>
        <label class="btn btn-outline-primary d-flex align-items-center" for="{{ $lang->code }}" style="position: relative">
          <img style="width: 20px; border-radius: 3px; margin-right: 5px" src="{{ asset('assets/icons/' . $lang->flag )}}" alt="{{ $lang->code }}">
          <span>{{ $lang->code }}</span>
        </label>

        @php
            $firstLang = false
        @endphp
          
      @endforeach


    </div>
  </div> --}}
</div>

<div class="my-4">
  <form class="form-control mb-3" action="{{ route('admin.create-bulletin')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>

    <p>
      <button class="btn btn-primary" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseLead" aria-expanded="false" aria-controls="collapseLead">
        Pengaturan Lead
      </button>
    
    </p>
    <div class="collapse mb-4" id="collapseLead">
      <div class="card card-body">

        <div class="mb-3">
          <label for="lead-title" class="form-label">Lead Title</label>
          <input type="text" name="lead_title" id="lead-title" class="form-control">
        </div>
        <div class="mb-3">
          <label for="lead-text" class="form-label">Lead Text</label>
          <textarea name="lead_text" id="lead-text" cols="10" rows="3" class="form-control"></textarea>
        </div>

      </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Background image</label>
      <input class="form-control" type="file" id="formFile" name="bg_image">
    </div>

    <div class="mb-3">
      <label for="page" class="form-label">Halaman</label>
      <textarea name="page" id="page" cols="30" rows="20" class="form-control"></textarea>
      <div class="valid-feedback d-block">
        Buat halaman berita/buletin disini.
      </div>
  
    </div>

    <div class="row">
    <div class="mb-3 col-6">
      <input type="submit" class="btn btn-success" value="Simpan"></input>
      <a href="" class="btn btn-outline-secondary">Batal</a>
    </div>
    <div class="mb-3 col-6 text-end">
      <a href="" class="btn btn-outline-secondary">
        <svg class="icon">
          <use xlink:href="{{ asset('public/assets/icons/free.svg#cil-link') }}"></use>
        </svg>
      </a>
    </div>

  </form>
</div>
</form>
@endsection

@push('bodyScript')
<script>
<script>
  var host = window.location.protocol + "//" + window.location.host;
  var editor_config = {
    content_css: host + "/sofifi/public/assets/css/sofifi.style.css",
    selector: 'textarea#page',
    path_absolute : "/",
    relative_urls: false,
    valid_elements: '*[*]',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'sofifi/public/laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };
  tinymce.init(editor_config);
</script>
@endpush