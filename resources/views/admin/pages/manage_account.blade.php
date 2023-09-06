@php
  $nav = '';     
@endphp
@extends('admin.layout')

@section('contents')
@if (!$user->isEmpty())
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title mb-3">Halaman Sofifi</h4>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{route('admin.update-account')}}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="staticName" class="col-sm-2 col-form-label">Nama Akun</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticName" value="{{$user[0]['name']}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail" value="{{$user[0]['email']}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                        @if ($errors->has('password'))
                            <span class="help-block text-danger">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPasswordConfirmed" class="col-sm-2 col-form-label">Password Konfirmasi</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirmed">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="offset-sm-2">
                        <button type="submit" class="btn btn-success">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('assets/icons/free.svg#cil-save')}}"></use>
                            </svg>
                            Simpan perubahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@else
    <div class="alert alert-danger" role="alert">
        Terjadi kesalahan!
    </div>
@endif

@endsection
