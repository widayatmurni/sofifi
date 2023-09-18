@extends('layout')

@section('pageContent')
  {!! html_entity_decode($page->page) !!}    
@endsection