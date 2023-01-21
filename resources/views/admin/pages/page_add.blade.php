@extends('admin.layout')

@section('contents')
<div class="d-flex justify-content-between mb-4">
  <div>
      <h4 class="card-title mb-0">Halaman Sofifi</h4>
  </div>
  <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
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
  </div>
</div>

<div class="my-4">
  <div class="form-control mb-3">
    <div class="mb-3">
      <label for="title" class="form-label">Judul Halaman</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
      <label for="page" class="form-label">Halaman</label>
      <textarea name="page" id="page" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="" class="btn btn-outline-secondary">Batal</a>
    </div>
  </div>
</div>
@endsection