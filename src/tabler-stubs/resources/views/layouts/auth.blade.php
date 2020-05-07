@extends('layouts.app')

@section('body')
<div class="container-tight py-6">
  <div class="text-center mb-4">
    <img src="\static\images\logo-12.svg" height="80" alt="">
  </div>
  @yield('content')
</div>
@endsection
