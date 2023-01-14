@extends('admin.layout')

@section('contents')
<div class="card mb-4">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-4">
      <div>
        <h4 class="card-title mb-0">Halaman Sofifi</h4>
      </div>
      <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
        <button class="btn btn-primary">
          <svg class="icon me-2">
            <use xlink:href="../assets/icons/free.svg#cil-link"></use>
          </svg>
          Tambah Baru
        </button>
      </div>
    </div>

    <div class="table-responsive" style="min-height:400px;margin-top:20px;">
      <table class="table table-hover border mb-0">
        <thead class="table-light fw-semibold">
            <tr>
                <th scope="col" class="text-center" width="40">#</th>
                <th scope="col" class="" width="">Halaman</th>
                <th scope="col" class="text-center" width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
          @if ($pages !== null)
            @foreach ($pages as $page)
              <tr>
                  <th class="text-center" scope="col">#</th>
                  <td>{{ $page->title }}</td>
                  <td>
                      <a href="#" type="button" class="btn btn-ghost-primary btn-sm" data-coreui-toggle="tooltip" title="Publish">
                          <svg class="icon">
                              <use xlink:href="../assets/icons/free.svg#cil-link"></use>
                            </svg>
                            
                      </a>
                      <a href="#" type="button" class="btn btn-ghost-primary btn-sm" data-coreui-toggle="tooltip" title="Preview">
                          <svg class="icon">
                              <use xlink:href="../assets/icons/free.svg#cil-check-alt"></use>
                            </svg>
                            
                      </a>
                      <a href="{{ route('edit-page', ['id' => $page->id]) }}" type="button" class="btn btn-ghost-success btn-sm" data-coreui-toggle="tooltip" title="Edit">
                          <svg class="icon">
                              <use xlink:href="../assets/icons/free.svg#cil-pencil"></use>
                            </svg>
                            
                      </a>
                      <a href="#" type="button" class="btn btn-ghost-danger btn-sm" data-coreui-toggle="tooltip" title="Hapus">
                          <svg class="icon">
                              <use xlink:href="../assets/icons/free.svg#cil-trash"></use>
                            </svg>
                            
                      </a>
                  </td>
              </tr> 
            @endforeach
          @else
              <tr>
                <td class="text-center text-danger" colspan="3">-Halaman tidak ditemukan!-</td>
              </tr>
          @endif

        </tbody>
    </table>

    </div>
  </div>
</div>



@endsection
