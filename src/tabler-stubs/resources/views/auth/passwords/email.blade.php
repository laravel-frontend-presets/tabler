@extends('layouts.auth')


@section('content')
<form class="card card-md" action="{{ route('password.email') }}" method="POST">
  @csrf
  <div class="card-body">
    <h2 class="mb-5 text-center">Reset Password</h2>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" required autocomplete="email" autofocus>
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-footer">
      <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
    </div>
  </div>
</form>
<div class="text-center text-muted">
  Do you remember your password? <a href="{{ route('login') }}" tabindex="-1">Back to login</a>
</div>
@endsection

@error('password')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
@enderror
