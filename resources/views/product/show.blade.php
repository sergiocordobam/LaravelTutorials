@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        @if(intval($viewData["product"]["price"]) > 100)
           <h5 class="red">
           {{ $viewData["product"]["name"] }}
          </h5>
        @else
          <h5 class="card-title">
           {{ $viewData["product"]["name"] }}
          </h5>
        @endif
        <p class="card-text">{{ $viewData["product"]["description"] }}</p>
        <p class="card-text">{{ $viewData["product"]["price"] }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
