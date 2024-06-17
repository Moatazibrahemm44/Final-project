@extends('layouts.app')
@section('title') login Page @endsection
@section('content')
<div class="container login">
<section class="containerr" id="signIn" data-aos="">
    <h1 class="form-title">Sign In</h1>
    {{-- Signin --}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert">
      <span> {{ $error }} </span>  
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>
    @endforeach
@endif
    <form method="POST" action="{{route('trips.signin')}}">
        @method('POST')
        @csrf
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" placeholder="Email" name="email" >
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="password" name="password">
            <label for="password">password</label>
        </div>
        <input type="submit" class="btn" value="Sign In" name="signIn">
        <div class="links"  >
            <p>Don't have an account yet ?<a href="{{route('trips.store')}}" class="a">&nbsp;sign Up</a></p>
        </div>
    </form>
</section>
</div>
@endsection