@extends('layouts.app')
@section('title')
    SmartTrips destiantions page
@endsection
@section('content')
    <div class="container destinations">
        <h1 class="heading" data-aos="zoom-out">destinations</h1>
        <section class="grid">
            @foreach ($destinations as $destination)
                <div class="box" data-aos="zoom-in">
                    <img src="{{ asset('images/' . $destination->image_path) }}" class="image" alt="">
                    <h3><a href="/trips/{{ $destination->id }}">{{ $destination->name }}</a></h3>
                </div>
            @endforeach
        </section>
    </div>
@endSection
