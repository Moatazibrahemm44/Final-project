@extends('layouts.app')
@section('title') Tours Page @endsection
@section('content')
    <!--tours section Starts-->
    <div class="container home">
        <div class="heading" data-aos="zoom-out">
         <h1>  POPULAR PLACES  </h1>  
        </div>
        <section class="grid" data-aos="fade-up">
            @foreach ($offers as $offer)
            <div class="box" data-aos="fade-up">
            <div class="price"><i class="fas fa-dollar-sign"></i>{{ $offer->price }} 
            </div>
            <img src="{{ asset('images/' . $offer->image) }}" class="image" alt="">
            <h3 class="name">{{ $offer->name }}</h3>
            <p class="address">{{ $offer->address }}</p>
            <a href="{{ route('trips.view', $offer->id) }}" class="btn">View more</a>
        </div>
        @endforeach
    </section>
    </div>
    </div>

    @endsection