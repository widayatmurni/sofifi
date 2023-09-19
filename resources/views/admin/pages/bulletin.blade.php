@php
  $nav = 'bulletin';     
@endphp
@extends('admin.layout')

@section('contents')

{{-- MODAL DELETE --}}

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id">
        <h6>Apakan yakin akan menghapus <span><strong></strong></span> ?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-coreui-dismiss="modal">Tidak</button>
        <a href="" type="button" class="btn btn-danger px-4">Ya</a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-4">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-4">
      <div>
        <h4 class="card-title mb-0">Halaman Sofifi</h4>
      </div>
      <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
        <a href="{{ route('add-bulletin') }}" class="btn btn-primary">
          <svg class="icon me-2">
            <use xlink:href="{{ asset('public/assets/icons/free.svg#cil-link') }}"></use>
          </svg>
          Tambah Baru
        </a>
      </div>
    </div>

    <div class="table-responsive" style="min-height:400px;margin-top:20px;">
      <table class="table table-hover border mb-0">
        <thead class="table-light fw-semibold">
            <tr>
                <th scope="col" class="text-center" width="40">#</th>
                <th scope="col" class="" width="">Halaman</th>
                <th scope="col" class="text-center" width="120"></th>
            </tr>
        </thead>
        <tbody>
          @if (!$bulletins->isEmpty())
            @foreach ($bulletins as $item)
              <tr>
                  <th class="text-center" scope="col">#</th>
                  <td>{{$item->title}}</td>
                  <td>
                      <a href="{{ route('bulletin.read', $item->slug )}}" type="button" class="btn btn-ghost-primary btn-sm" data-coreui-toggle="tooltip" title="Lihat" target="_blank">
                          <svg class="icon">
                            <use xlink:href="{{ asset('public/assets/icons/free.svg#cil-link') }}"></use>
                          </svg>
                            
                      </a>
                      <a href="{{ route('bulletin.edit', $item->id)}}" type="button" class="btn btn-ghost-success btn-sm" data-coreui-toggle="tooltip" title="Edit">
                          <svg class="icon">
                            <use xlink:href="{{ asset('public/assets/icons/free.svg#cil-pencil') }}"></use>
                          </svg>
                            
                      </a>
                      <button type="button" class="btn btn-ghost-danger btn-sm" data-coreui-toggle="modal" data-coreui-target="#deleteModal" data-coreui-whatever="" data-title="{{ $item->title }}" data-id="{{ $item->id }}">
                        <svg class="icon">
                          <use xlink:href=".{{ asset('public/assets/icons/free.svg#cil-trash') }}"></use>
                        </svg>
                      </button>
                  </td>
              </tr> 
            @endforeach
          @else
              <tr>
                <td class="text-center text-danger" colspan="3">-Belum ada bulletin!-</td>
              </tr>
          @endif

        </tbody>
    </table>

    </div>
  </div>
</div>

@endsection

@push('bodyScript')
<script>
const deleteModal = document.querySelector('#deleteModal')

deleteModal.addEventListener('show.coreui.modal', event => {
  const button = event.relatedTarget
  const title = button.getAttribute('data-title')
  const curId = button.getAttribute('data-id')

  const modalBodySpan = deleteModal.querySelector('.modal-body span')
  const modalBodyInput = deleteModal.querySelector('.modal-body input')
  const deleteUri = deleteModal.querySelector('.modal-footer a')
  let url='{{route("admin.delete-bulletin", ":id")}}'
  url=url.replace(':id', curId)

  modalBodySpan.innerHTML = `<b>${title}</b>`
  deleteUri.href = url
})

</script>
@endPush