@extends('layouts.Main')
@section('title') SmartTrips booking page @endsection
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add your custom CSS here if needed -->
</head>
<body>
<section class="booking">
    <h1 class="heading" data-aos="zoom-out">Book here</h1>

    <form action="{{ route('booking.store') }}" method="POST" class="book-form">
        @csrf
        <input type="hidden" name="tour_id" value="{{ $tour->id }}">
        <div class="flex" data-aos="zoom-in" data-aos-delay="600">
            {{-- <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="enter your name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <div class="inputBox">
                <span>Arrivals :</span>
                <input type="date" name="arrival_date" value="{{ old('arrival_date') }}" required>
                @error('arrival_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="inputBox">
                <span>Leaving :</span>
                <input type="date" name="leaving_date" value="{{ old('leaving_date') }}" required>
                @error('leaving_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="enter your number" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <div class="inputBox">
                <span>How many adults:</span>
                <input type="number" placeholder="number of guests" name="Number_of_adults" value="{{ old('Number_of_adults') }}" required>
                @error('Number_of_adults')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="inputBox">
                <span>How many children:</span>
                <input type="number" placeholder="number of guests" name="Number_of_children" value="{{ old('Number_of_children') }}" required>
                @error('Number_of_children')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address" min="11" name="address" value="{{ old('address') }}" required>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}
            {{-- <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="enter your email address" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <div class="inputBox">
                <select name="method" class="checkout" required>
                    <option value="" disabled selected>Select payment method</option>
                    <option value="Cash" {{ old('method') == 'Cash' ? 'selected' : '' }}>Cash</option>
                    <option value="Visa" {{ old('method') == 'Visa' ? 'selected' : '' }}>Credit card</option>
                    <option value="paypal" {{ old('method') == 'paypal' ? 'selected' : '' }}>PayPal</option>
                </select>
                @error('method')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <p>total price : <span class="price-1">1000$</span></p>
        </div>
        <input type="submit" value="book now" name="send" class="btn">
    </form>
</section>
<script src="{{ asset('js/app.js') }}"></script>
<!-- Add your custom JS here if needed -->
</body>
</html>

@endsection