@php
  $nav = 'sofifi';     
@endphp
@extends('admin.layout')

@section('contents')

@if ($page->isEmpty())
    <div class="callout callout-danger bg-white">
        <h5 class="my-3"><strong>Halaman belum tersedia!</strong> Apakah ingin membuat halaman?</h5>
        <div class="my-3 d-flex">
            <a href="{{ route('generateNewPage', ['slug' => $cur_slug,'lang_id' => $cur_lang_id]) }}" type="button" class="btn btn-success me-2 px-5">Ya</a>
            <a href="{{ URL::previous() }}" type="button" class="btn btn-outline-secondary px-2">Tidak</a>
        </div>
    </div>  
@else
    <div class="d-flex justify-content-between mb-4">
        <div>
            <h4 class="card-title mb-0">Halaman Sofifi</h4>
        </div>
        <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
        </div>
        
            <div class="btn-group btn-group-toggle" role="group" aria-label="Basic radio toggle button group">
                @foreach ($languages as $lang)
                    <input type="radio" class="btn-check btn-lang" name="btn-lang" id="{{ $lang->code }}"autocomplete="off" @if ($page[0]->lang_id == $lang->id)
                        @checked(true)
                    @endif>
                    <a href="{{ route('edit-page', ['slug' => $page[0]->slug, 'lang' => $lang->id]) }}" class="btn btn-outline-primary" for="{{ $lang->code }}">
                        <img src="{{ asset('assets/icons/' . $lang->flag) }}" alt="{{ $lang->code }}" style="width: 20px">
                        <span>{{ $lang->code }}</span>
                    </a>
                    
                @endforeach
            </div>
        </div>
    </div>

    <form class="form-control" action="{{ route('post-add-page') }}" method="post">
        @csrf
        <div class="row mb-4">
            <input type="hidden" name="_id" value={{ $page[0]->id }}>
            <div class="mb-3">
                <label for="title" class="form-label">Judul Halaman</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $page[0]->title}}">
            </div>
            <div class="mb-3">
                <label for="page" class="form-label">Judul Halaman</label>
                <textarea name="page" class="my-editor form-control" id="page" cols="30" rows="10">{{ $page[0]->page}}</textarea>
            </div>
        </div>
    
        <div class="mb-3">
            <button type="submit" class="btn btn-success px-4">
                <svg class="icon me-2">
                    <use xlink:href="{{ asset('assets/icons/free.svg#cil-save') }}"></use>
                </svg>
                <span>Simpan</span>
            </button>

            <a href="{{ route('admin.sofifi') }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>

@endif

@endsection


@push('bodyScript')
{{-- <script src="{{ asset('assets/tinymce/js/tinymce/tinymce.min.js') }}"></script> --}}
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
var editor_config = {
  content_css:"http://dev.local:8000/assets/css/style.css",
  path_absolute : "/",
  selector: 'textarea#page',
  relative_urls: false,
  valid_elements: '*[*]',
  plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table directionality",
    "emoticons template paste textpattern"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
  file_picker_callback : function(callback, value, meta) {
    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
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