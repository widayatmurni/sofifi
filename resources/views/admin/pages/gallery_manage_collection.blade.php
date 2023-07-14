@php
  $nav = 'gallery';     
@endphp
@extends('admin.layout')

@section('contents')
{{-- DIALOG ADD --}}
<div class="modal fade" id="addCollection" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Koleksi </h5>
          <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <form action="{{ route('admin.add-photo-to-album')}}" method="post" enctype="multipart/form-data"> --}}
        <div class="modal-body">
            {{-- <div class="container-drop-form">
                @csrf
                <input type="hidden" name="idAlbum" value="{{ $album['id'] }}">
                <input type="file" name="files" id="upload-button" multiple accept="image/*" />
                <label for="upload-button">
                    <i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
                </label>

                <div id="error"></div>
                <div id="image-display"></div>
            </div> --}}

            <form method="POST" action="{{ route('admin.add-photo-to-album')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
                  <div class="col-md-6">
                      <input type="file" class="form-control" name="filename[]" required multiple>
                      <input type="hidden" name="idAlbum" value="{{ $album['id'] }}">
                  </div>
              </div>
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Upload') }}
                      </button>
                  </div>
              </div>
          </form>

        </div>
          {{-- <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-coreui-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-success px-4" value="Simpan"> 
            </form>
            </div> --}}
      </div>
    </div>
</div>

{{-- HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between mb-4">
            <div>
              <h4 class="card-title mb-0">{{ $album['title']}}</h4>
            </div>
            <a href="{{ route('admin.gallery') }}" class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                <button type="button" class="btn btn-secondary rounded-pill" data-coreui-toggle="modal" data-coreui-target="#createModal">
                    <svg class="icon me-2">
                      <use xlink:href="../assets/icons/free.svg#cil-plus"></use>
                    </svg>
                </button>
            </a>
          </div>
    </div>
</div>

{{-- CONTENTS --}}
@if ($collections->isEmpty()) 
    <div class="row">
        <div class="col-12 me-4">
            <div class="alert alert-warning" role="alert">
                <div class="text-center">Tidak ada koleksi dalam album ini!</div>
            </div>          
        </div>
    </div>

@else
    <div class="row">
        {{-- items --}}
        @foreach ($collections as $item)
          <div class="col-4">
            <div class="card">
              <img src="{{asset('photos/' . $item->file_uri)}}">
            </div>
          </div>
        @endforeach
        
    </div>
@endif

<div class="row mt-4">
    <div class="col-12 text-center">
        <button class="btn btn-lg btn-primary rounded-pill" data-coreui-toggle="modal" data-coreui-target="#addCollection">
            <svg class="icon me-2">
                <use xlink:href="../assets/icons/free.svg#cil-plus"></use>
            </svg>
            Tambah photo
        </button>
    </div>
</div>

@endsection

@push('bodyScript')
<script>
// const exampleModal = document.getElementById('exampleModal')
// exampleModal.addEventListener('show.coreui.modal', event => {
//   const button = event.relatedTarget
//   const title = button.getAttribute('data-title')
//   const curSlug = button.getAttribute('data-slug')

//   const modalBodySpan = exampleModal.querySelector('.modal-body span')
//   const modalBodyInput = exampleModal.querySelector('.modal-body input')

//   modalBodySpan.innerHTML = `<b>${title}</b>`
//   modalBodyInput.value = curSlug
// })

let uploadButton = document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");
let container = document.querySelector(".container-drop-form");
let error = document.getElementById("error");
let imageDisplay = document.getElementById("image-display");

container.addEventListener(
  "dragenter",
  (e) => {
    e.preventDefault();
    e.stopPropagation();
    container.classList.add("active");
  },
  false
);

container.addEventListener(
  "dragleave",
  (e) => {
    e.preventDefault();
    e.stopPropagation();
    container.classList.remove("active");
  },
  false
);

container.addEventListener(
  "dragover",
  (e) => {
    e.preventDefault();
    e.stopPropagation();
    container.classList.add("active");
  },
  false
);

container.addEventListener(
  "drop",
  (e) => {
    e.preventDefault();
    e.stopPropagation();
    container.classList.remove("active");
    let draggedData = e.dataTransfer;
    let files = draggedData.files;
    imageDisplay.innerHTML = "";
    Array.from(files).forEach((file) => {
      fileHandler(file, file.name, file.type);
    });
  },
  false
);

window.onload = () => {
  error.innerText = "";
};

const fileHandler = (file, name, type) => {
  if (type.split("/")[0] !== "image") {
    //File Type Error
    error.innerText = "Please upload an image file";
    return false;
  }
  error.innerText = "";
  let reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onloadend = () => {
    //image and file name
    let imageContainer = document.createElement("figure");
    let img = document.createElement("img");
    img.src = reader.result;
    imageContainer.appendChild(img);
    imageContainer.innerHTML += `<figcaption>${name}</figcaption>`;
    imageDisplay.appendChild(imageContainer);
  };
};

//Upload Button
uploadButton.addEventListener("change", () => {
  imageDisplay.innerHTML = "";
  Array.from(uploadButton.files).forEach((file) => {
    fileHandler(file, file.name, file.type);
  });
});

</script>
@endpush