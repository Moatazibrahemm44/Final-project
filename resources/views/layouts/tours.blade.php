@extends('layouts.app')
@section('content')
<div class="container cairo"  >
    <h1 class="heading" data-aos="zoom-out">Explore {{$destinations->name}}</h1>
    <section>
        @foreach ($destinationsinfo as $destination)
            <div class="grid">
                <div class="image-container" data-aos="fade-up">
                    <div class="small-image">
                        <img src="{{ asset('images/' . $destination->image1) }}" class="hotel-image" alt=""> 
                        <img src="{{ asset('images/' . $destination->image2) }}" class="hotel-image" alt="">
                        <img src="{{ asset('images/' . $destination->image3) }}" class="hotel-image" alt="">
                        <img src="{{ asset('images/' . $destination->image4) }}" class="hotel-image" alt="">
                        <img src="{{ asset('images/' . $destination->image5) }}" class="hotel-image" alt="">
                        <img src="{{ asset('images/' . $destination->image6) }}" class="hotel-image" alt="">
                    </div>
                    <div class="big-image">
                        <img src="{{ asset('images/' . $destination->bigimage) }}" class="big-image" alt="">
                    </div>
                </div>
                <div class="content" data-aos="fade-up">
                    <h3>{{ $destination->heading }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>{{ $destination->description }}</p>
                    <div class="price">{{ $destination->price }} <span>$200</span></div>
                    <a href="{{ route('trips.view', $destination->id) }}" class="btn">View more</a>
                </div>
            </div>
        @endforeach
    </section>
    @endsection
    
    
