@extends('layout.master')

@section('title', 'register')

@section('content')
<style>
  .english{
    font-family: Arial, Helvetica, sans-serif;
  }
</style>
<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- register form start -->
                <h3 class="english text-info text-center mb-3 text-dark">Register</h3>
                <p class="text-center english">Create an account to post</p>

                <form action="{{url('/users')}}"  method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="name" class="english">Name</label>
                        <input type="text" class="form-control english" id="username" name="name" value={{old('name')}}>

                        @error('name')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="email" class="english">Email</label>
                        <input type="email" class="form-control english" id="email" name="email" value={{old('email')}}>
                        
                        @error('email')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="english">Password</label>
                        <input type="password" class="form-control english" id="password"  name="password" value={{old('password')}}>
                        
                        @error('password')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="english">Confirm Password</label>
                        <input type="password" class="form-control english" id="confirm_password" name="password_confirmation" value={{old('confirm_password')}}>
                        
                        @error('confirm_password')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                        <div class="mb-3">
                          <button class="btn btn-primary english border-0">Sign Up</button>     
                        </div>
                        <p>
                        Already have an account?
                        <a href="{{url('/login')}}" class="english text-primary">Login</a>
                      </p>
                   
                </form>
                <!-- register form end -->
            </div>
        </div>
    </div>
</div>





@endsection