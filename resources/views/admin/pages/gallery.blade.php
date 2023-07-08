@php
  $nav = 'gallery';     
@endphp
@extends('admin.layout')

@section('contents')

{{-- MODAL --}}
<div class="modal fade" id="createModal" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat Album Baru</h5>
          <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.create-album')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="title" class="col-form-label">Nama Album:</label>
                  <input type="text" class="form-control" id="title" name="title" @required(true)>
                </div>
                <div class="mb-3">
                  <label for="description" class="col-form-label">Deskripsi:</label>
                  <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-coreui-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success px-4">Simpan</button>
            </form>   
        </div>
      </div>
    </div>
</div>

{{-- HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between mb-4">
            <div>
              <h4 class="card-title mb-0">Album Dokumentasi</h4>
            </div>
            <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                <button type="button" class="btn btn-primary px-3" data-coreui-toggle="modal" data-coreui-target="#createModal">
                    <svg class="icon me-2">
                      <use xlink:href="../assets/icons/free.svg#cil-plus"></use>
                    </svg>
                    Buat Album
                </button>
            </div>
          </div>
    </div>
</div>

{{-- CONTENTS --}}
@if ($albums->isEmpty()) 
    <div class="row">
        <div class="col">
            <div class="alert alert-primary" role="alert">
                Koleksi album tidak ditemukan!.
            </div>          
        </div>
    </div>

@else
    <div class="row">

        {{-- items --}}
        @foreach ($albums as $item)

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-4 __album">
                    <a href="{{ route('admin.get-album', $item->id)}}" class="__album-thumb">
                        <div class="__thumb-prev __thumb-bk"></div>
                        <div class="__thumb-prev __thumb-fr"></div>
                    </a>
                    <div class="__album-desc">
                        <div class="__desc-boby">
                            <div class="__desc-text">{{ $item->title }}</div>
                            <div class="__desc-tools">t</div>
                        </div>
                    </div>
                </div>
            </div>
        
        @endforeach
        
    </div>
@endif

@endsection

@push('bodyScript')
{{-- <script>
const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.coreui.modal', event => {
  const button = event.relatedTarget
  const title = button.getAttribute('data-title')
  const curSlug = button.getAttribute('data-slug')

  const modalBodySpan = exampleModal.querySelector('.modal-body span')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalBodySpan.innerHTML = `<b>${title}</b>`
  modalBodyInput.value = curSlug
})

</script> --}}
@endpush