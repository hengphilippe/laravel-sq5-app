@extends('auth.master')
@section('form')
    <h1 class="login-title">Update Profile </h1>
    <form action="{{ url('/user/profile/update/'.$users->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">UserName</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $users->phone }}" placeholder="Enter your phone">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"  value="{{ $users->email }}" placeholder="Enter your email">
        </div>
        
        <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Update">
    </form>

@endsection