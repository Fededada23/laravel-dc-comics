@extends('layouts.app')
@section('title')
@section('content')
<div class="d-flex justify-content-center m-3">
    <a href="{{route('comics.index')}}">
      <button type="button" class="btn btn-secondary">Show Comics</button>
    </a>
  </div>
@endsection