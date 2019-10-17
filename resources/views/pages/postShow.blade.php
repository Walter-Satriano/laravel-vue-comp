@extends('layouts.main-layout')

@section('content')

  @include('components.postCompShow')

  <div id="app">
    <post-show-dom-elem></post-show-dom-elem>
  </div>

@endsection
