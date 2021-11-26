@extends('auth.master')
@section('form')
<h1 class="login-title">Register</h1>
<form action="/register" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">UserName</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
      </div>
       <div class="form-group">
        <label for="name">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone">
      </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
  </div>
  <div class="form-group mb-4">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
  </div>
  <div class="form-group mb-4">
    <label for="password_confirmation">Re-Password</label>
    <input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="enter your re-passsword">
  </div>
   <div class="form-group mb-4">
    <label for="password_confirmation">Image</label>
    <input type="file" name="image" id="image" class="form-control">
  </div>
  <div class="form-group mb-4">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjgFA_gmz1WqeVY9Z3KeGDAU02IDxZiiRBOXJlZdKHe2oSt9-qU0wcJzi8AL_jejTIjv8&usqp=CAU" alt="" style="width: 60px; height: 60px;"/>
  </div>
  <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
</form>
<a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>
<p class="login-wrapper-footer-text">Already Member? <a href="/login" class="text-reset">Login here</a></p>
@endsection