@extends('auth.master')
@section('form')
<h1 class="login-title">Email Verifycation </h1>
<form action="{{ route('verification.send') }}" method="POST">
    @csrf
 
 @if(session('status'))
  {{ session('status') }}
 @endif

  <div class="form-group">
    <label for="email">Please check your mail-box to get confirmation link.</label>
    {{-- <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com"> --}}
  </div>
  <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Resend Link">
</form>

@endsection