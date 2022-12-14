<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name')}}</title>
  {{-- STYLES --}}
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  {{-- FONTS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
  @stack('headerResources')
</head>
<body>
  <form action="{{ route('postpage') }}" method="post">
    <div class="">
      @csrf
      <div class="">
        <label for="">Title</label>
        <input type="text" name="title">
      </div>
      <div class="">
        <label for="">Slug</label>
        <input type="text" name="slug">
      </div>
      <div class="">
        <label for="">Lang</label>
        <input type="text" name="lang">
      </div>
      <div class="">
        <label for="">Content</label>
        <textarea name="page" id="" cols="30" rows="10"></textarea>
      </div>
    </div>
    <input type="submit" value="Simpan">
  </form>
</body>
</html>