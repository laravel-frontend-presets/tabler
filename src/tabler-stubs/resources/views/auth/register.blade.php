@extends('layouts.auth')

@section('content')
<form class="card card-md" action="{{ route('register') }}" method="POST">
  @csrf
  <div class="card-body">
    <h2 class="mb-5 text-center">Create new account</h2>
    <div class="form-group mb-2">
      <label class="form-label">Name</label>
      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" required autocomplete="name" autofocus>
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-2">
      <label class="form-label">Email address</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-2">
      <label class="form-label">
        Password
        <span class="form-label-description">
          <a href="{{ route('password.request') }}">Forgot password</a>
        </span>
      </label>
      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
      @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-2">
      <label class="form-label">Confirm Password</label>
      <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password">
      @error('password_confirmation')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-2">
      <label class="form-check">
        <input type="checkbox" class="form-check-input">
        <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
      </label>
    </div>
    <div class="form-footer">
      <button type="submit" class="btn btn-primary btn-block">Create new account</button>
    </div>
  </div>
</form>
<div class="text-center text-muted">
  Already have an account? <a href="{{ route('login') }}" tabindex="-1">Login</a>
</div>
@endsection
