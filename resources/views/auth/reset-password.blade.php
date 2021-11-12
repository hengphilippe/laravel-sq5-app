@extends('auth.master')
@section('form')
<h1 class="login-title">Rest Password </h1>
<form action="{{ route('password.update') }}" method="POST">
    @csrf
 @error('email')
    {{ $message }}
 @enderror
  <div class="form-group">
    <label for="email">Email</label>
    <input value="{{ $request->email }}"
    type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
  </div>
    @error('password')
    {{ $message }}
    @enderror
  <div class="form-group mb-4">
    <label for="password">New Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
  </div>

  <div class="form-group mb-4">
    <label for="password_confirmation">Re-Password</label>
    <input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="enter your re-passsword">
  </div>
  <input type="hidden" name="token" value="{{ $request->route('token') }}" >
  <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Reset Password">
</form>

<p class="login-wrapper-footer-text">Remember your account? <a href="/login" class="text-reset">Login here</a></p>
@endsection