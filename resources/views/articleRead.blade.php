@extends('articlesBase')

@section('Articles')
  {!! html_entity_decode($buletin['content']) !!}    
@endsection