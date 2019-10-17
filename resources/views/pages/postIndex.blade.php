@extends('layouts.main-layout')

@section('content')

  @include('components.postComp')

  <div id="app">
    <post-dom-elem></post-dom-elem>
  </div>

@endsection
