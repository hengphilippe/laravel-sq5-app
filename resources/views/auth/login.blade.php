@extends('auth.master')
@section('form')
<h1 class="login-title">Log in</h1>
<form action="/login" method="POST">
    @csrf
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
  </div>
  <div class="form-group mb-4">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
  </div>
  <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
</form>
<a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>
<p class="login-wrapper-footer-text">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
@endsection