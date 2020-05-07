@extends('layouts.auth')

@section('content')
<div class="card card-md" >
  <div class="card-body">
  @if (session('resent'))
    <div class="alert alert-success" role="alert">
      A fresh verification link has been sent to your email address.
    </div>
  @endif
    <h2 class="mb-3 text-center">Verify Your Email Address</h2>
    <p class="text-muted">Before proceeding, please check your email for a verification link.</p>
  </div>
</div>
<div class="text-center text-muted">
  Didn't receive an email? <a href="#" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();" tabindex="-1">Request another.</a>
</div>
<form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
    @csrf
</form>
@endsection
