@extends('layouts.app')
@section('content')
<div class="container cairo"  >
    <h1 class="heading" data-aos="zoom-out">Explore {{$destinations->name}}</h1>
<section>   
@foreach ($destinationsinfo as $destinationsinfo)
    <div class="grid">
        <div class="image-container" data-aos="fade-up">
            <div class="small-image">
                <img src="{{ asset('images/' . $destinationsinfo->image1) }}" class="image" alt=""> 
                <img src="{{ asset('images/' . $destinationsinfo->image2) }}" class="image" alt="">
                <img src="{{ asset('images/' . $destinationsinfo->image3) }}" class="image" alt="">
                <img src="{{ asset('images/' . $destinationsinfo->image4) }}" class="image" alt="">
                <img src="{{ asset('images/' . $destinationsinfo->image5) }}" class="image" alt="">
                <img src="{{ asset('images/' . $destinationsinfo->image6) }}" class="image" alt="">
            <!-- <img src="../images/Kempinski Nile Hotel Cairo/kempinki7.jpg" class="hotel-image-1" alt=""> -->
            </div>
            <div class="big-image">
                <img src="{{ asset('images/' . $destinationsinfo->bigimage) }}" class="image" alt="">
            </div>
        </div>
        <div class="content" data-aos="fade-up">
            <h3>{{$destinationsinfo->heading}}</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                {{$destinationsinfo->description}}
            </p>
            <div class="price"> {{$destinationsinfo->price}} <span>$200</span></div>
            <a href="{{ route('trips.view', $destinationsinfo->id) }}" class="btn">View more</a>
        </div>
    </div>
    @endforeach
</section>  
@endsection
