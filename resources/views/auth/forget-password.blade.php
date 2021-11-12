@extends('auth.master')
@section('form')
<h1 class="login-title">Forget Password </h1>
<form action="{{ route('password.email') }}" method="POST">
    @csrf
 @error('email')
    {{ $message }}
 @enderror
 
 @if(session('status'))
  {{ session('status') }}
 @endif
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
  </div>
  
  <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Reset Password">
</form>

<p class="login-wrapper-footer-text">Remember your account? <a href="/login" class="text-reset">Login here</a></p>
@endsection