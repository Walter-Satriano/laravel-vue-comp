@extends('layouts.main-layout')

@section('content')

  @include('components.postComp')

  <div id="app">
    <post-index-dom-elem></post-index-dom-elem>
  </div>

@endsection
