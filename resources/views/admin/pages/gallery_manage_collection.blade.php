@php
  $nav = 'gallery';     
@endphp
@extends('admin.layout')

@section('contents')

{{-- HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between mb-4">
            <div>
              <h4 class="card-title mb-0">{{ $album_name['title']}}</h4>
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
        
    </div>
@endif

<div class="row">
    <div class="col-12 text-center">
        <button class="btn btn-lg btn-primary rounded-pill">
            <svg class="icon me-2">
                <use xlink:href="../assets/icons/free.svg#cil-plus"></use>
              </svg>
        </button>
    </div>
</div>

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