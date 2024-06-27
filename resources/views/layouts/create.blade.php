@extends('layouts.app')
@section('title') Registration Page @endsection
@section('content')
<div class="container login">
    <section class="containerr" >
        <h1 class="form-title">Register Now</h1>
        {{-- Signup --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alertc">
              <span> {{ $error }} </span>  
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            @endforeach
@endif
        <form method="POST" action="{{route('trips.store')}}">
            @method('POST') 
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="First Name"  >
                <label for="name">Full Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" >
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password" >
                <label for="confirm-password">Confirm password</label>
                
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="mobile_number" id="mobile_number" placeholder="mobile number" >
                <label for="mobile_number">Enter your mobile number</label>
            </div>
            <div class="input-group">
                <i class="fas fa-calendar"></i>
                <input type="date" name="date_of_birth" id="date_of_birth" placeholder="mobile number" >
                <label for="date_of_birth">Enter your date of birth</label>
            </div>

            <div class="input-group">
                <i class="fas fa-location-dot"></i>
                <input type="text" name="address" id="address" placeholder="mobile number" >
                <label for="mobile number">Enter your address</label>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
            <div class="links"  >
                <p>Already Have Account ?<a href="{{route('trips.login')}}" class="a">&nbsp;sign In</a></p>
            </div>
        </form>
    </section>
</div>
@endsection