@extends('auth.master')
@section('form')
<h1 class="login-title">Register</h1>
<form action="/register" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">UserName</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Your name...">
      </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="010 200 300">
  </div>
  <div class="form-group mb-4">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
  </div>
  <div class="form-group mb-4">
    <label for="password_confirmation">Re-Password</label>
    <input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="enter your re-passsword">
  </div>
  <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
</form>
<a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>
<p class="login-wrapper-footer-text">Already Member? <a href="/login" class="text-reset">Login here</a></p>
@endsection