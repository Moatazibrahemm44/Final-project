@extends('layouts.app')
@section('title') SmartTrips Home Page @endsection
@section('content')
{{-- offers --}}
<div class="container home">
    <div class="heading" data-aos="fade-down">
        <span>Our Offers</span>
        <h1>Up To 50% Off</h1>
    </div>
    <section class="grid" data-aos="fade-up">
        @foreach ($offers as $offer)
        <div class="box" data-aos="fade-up">
        <div class="price"><i class="fas fa-dollar-sign"></i>{{ $offer->price }} <span>{{ $offer->original_price }}</span>
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

<script async src="https://cse.google.com/cse.js?cx=62274a9a48e074824" data-aos="fade-down">
</script>
<div class="gcse-search" data-aos="fade-down"></div>
    {{-- Seachbar --}}
<div class="booking">
    <h1 class="heading" data-aos="zoom-out">Where to?</h1>
    <div class="inputBox" data-aos="fade-down">
        <div class="search">
            <label for="search-box" class="fas fa-search"></label>
            <input type="search" placeholder="place you want to visit" list="input" id="search-box">
            <button type="submit" form="searchForm" class="btn">Explore our tours</button>
        </div>
        <datalist id="input">
            <option >Alexandria</option>
            <option >Cairo</option>
            <option >Siwa</option>
            <option >Dahab</option>
            <option>Sharm ElSheikh</option>
            <option >Luxor</option>
            <option>Gouna</option>
        </datalist>
    </div>
    <section class="gril">

        <div class="box" data-aos="fade-up">
            <div class="content">
                <img src="images/Ai.png" class="image" alt="" data-aos="fade-up">
                <p data-aos="zoom-in">&nbsp;Powered by AI</p>
                <br>
                <h1 data-aos="zoom-in">Build a trip in minutes</h1>
                <h2 data-aos="zoom-in">Get a personalized itinerary just for you, guided by traveler tips and
                    reviews.</h2>
                    <a href="{{ url('/start-trip') }}" class="btn" data-aos="zoom-out">
                        <i class="fa-solid fa-location-dot" data-aos="fade-down"></i>Start a trip with AI
                    </a>

            </div>

        </div>
    </section> 
</div>
 



@endsection