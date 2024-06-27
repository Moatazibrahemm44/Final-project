<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTrips</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Include your custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

</head>
<body style="overflow: hidden;">
    

       
    
<!-- header section starts-->
<header class="header" data-aos="fade-down">

    <section class="flex">
        <a class="logoo" href="{{ route('trips.index') }}"><img src=" {{ asset('images/logo2.png')}}"></a>
        <!-- <a href="#" class="logo"> <i class="fa-solid fa-plane"></i>SmartTrips</a>  -->
        <nav class="navbar">
            <a href="{{ route('trips.index') }}">Home</a>
            <a href="{{ route('trips.about') }}">About</a>
            <a href="{{ route('trips.show')}}">Tours</a>
            <a href="{{ route('trips.destinations')}}">Destinations</a>
            <a href="{{ route('trips.contact') }}">Contact</a>
        </nav>
        <div class="new">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        @if (!auth()->check())
        <div class="icons">
            <a class="fas fa-user" href="{{ route('trips.login') }}"></a>
        </div>
    @else
        <form method="POST" action="/logout">
            @csrf
            <button class="btn" type="submit">Logout</button>
        </form>
    @endif

    </section>

</header>
<!-- header section ends -->
<div class="loader-container">
    <img src={{ asset('images/loader.gif') }} alt=""></div> 
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    // const firebaseConfig = {
    //   apiKey: "AIzaSyBF_ngVkQmdeVMf276UMCArZYrL2l6O_uk",
    //   authDomain: "smarttrips-3084b.firebaseapp.com",
    //   projectId: "smarttrips-3084b",
    //   storageBucket: "smarttrips-3084b.appspot.com",
    //   messagingSenderId: "716034608595",
    //   appId: "1:716034608595:web:da8c360673bc636bac7326",
    //   measurementId: "G-BE7HD7YJ7B"
    // };
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script src="{{ asset('chatbot-deployment/standalone-frontend/app.js') }}"></script>

<!-- custom js file link -->
@yield('content')


<!--footer section starts-->
    <div class="footer">

        <div class="box-container">
            <div class="box" data-aos="zoom-out">
                <h3>Our location</h3>
                <a href="trips/1"> <i class="fas fa-map-marker-alt"> </i> Cairo </a>
                <a href="trips/2"> <i class="fas fa-map-marker-alt"> </i> Alexandria </a>
                <a href="trips/3"> <i class="fas fa-map-marker-alt"> </i> Dahab </a>



            </div>

            <div class="box" data-aos="zoom-out">
                <h3>quick links</h3>
                <a href="{{ route('trips.index') }}"> <i class="fas fa-arrow-right"> </i> home </a>
                <a href="{{ route('trips.about') }}"> <i class="fas fa-arrow-right"> </i> About </a>
                <a href="{{ route('trips.show')}}"> <i class="fas fa-arrow-right"> </i> tours </a>
                <a href="{{ route('trips.destinations') }}"> <i class="fas fa-arrow-right"> </i> Destinations </a>
                <a href="{{ route('trips.contact') }}"> <i class="fas fa-arrow-right"> </i> contact </a>
            </div>

            <div class="box" data-aos="zoom-out">
                <h3>extra links</h3>
                <a href="{{ route('trips.about') }}"> <i class="fas fa-arrow-right"> </i> account info </a>
                <a href="{{ route('trips.contact') }}"> <i class="fas fa-arrow-right"> </i> our services </a>
            </div>

            <div class="box" data-aos="zoom-out">
                <h3>contact info</h3>
                <a href="{{ url('/gmail') }}"> <i class="fas fa-envelope"></i>SmartTrips@gmail.com</a>
                <a href="#"> <i class="fas fa-phone"> </i> +201116440052</a>
                <a href="#"> <i class="fas fa-phone"> </i> +201147393993</a>
                <img src="images/worldmap1.png" class="map" alt="">
            </div>

        </div>
        <div class="share" data-aos="fade-up">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <!-- <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a> -->
        </div>
        <div class="credit">created by <span>SmartTrips Team</span> | all rights reserved</div>

    </div>
    <!--footer section ends-->
    
    <div class="chatbox">
        <div class="chatbox__support">
            <div class="chatbox__header">
                <div class="chatbox__image--header">
                    <img src="/images/chatbox-icon1.png" alt="User Image">
                </div>
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header">Chat Support</h4>
                    <p class="chatbox__description--header">Hi. My name is Tripsy. How can I help you?</p>
                </div>
            </div>
            <div class="chatbox__messages">
                <!-- Messages will be dynamically added here -->
            </div>
            <div class="chatbox__footer">
                <input type="text" placeholder="Write a message...">
                <button class="chatbox__send--footer send__button">Send</button>
            </div>
        </div>
        <div class="chatbox__button">
            <button><img src="/images/chatbox-icon.png" alt="Chat Icon"/></button>
        </div>
    </div>
    
    
