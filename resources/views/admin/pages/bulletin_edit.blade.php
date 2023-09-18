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
</div>

<div class="my-4">
  <form class="form-control mb-3" action="{{ route('admin.update-bulletin')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value={{ $page->id }} @readonly(true)>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}">
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
          <input type="text" name="lead_title" id="lead-title" class="form-control" value="{{ $page->lead_title }}">
        </div>
        <div class="mb-3">
          <label for="lead-text" class="form-label">Lead Text</label>
          <textarea name="lead_text" id="lead-text" cols="10" rows="3" class="form-control">
            {{ $page->lead_content }}
          </textarea>
        </div>

      </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Background image</label>
      <input class="form-control" type="file" id="formFile" name="bg_image" value="{{ url(asset($page->lead_bg))}}">
    </div>

    <div class="mb-3">
      <label for="page" class="form-label">Halaman</label>
      <textarea name="page" id="page" cols="30" rows="20" class="form-control">
        {{ $page->content }}
      </textarea>
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
tinymce.init({
        content_css:"public/assets/css/sofifi.style.css",
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
</script>
@endpush