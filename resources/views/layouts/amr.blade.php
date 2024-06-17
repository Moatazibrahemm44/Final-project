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
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
    

</head>
<body style="overflow: hidden;">
    
<!-- header section starts-->
<header class="header" data-aos="fade-down">

    <section class="flex">
        <a class="logo" href="{{ route('trips.index') }}"><img src=" {{ asset('images/logo2.png')}}"></a>
        <!-- <a href="#" class="logo"> <i class="fa-solid fa-plane"></i>SmartTrips</a>  -->
        <nav class="navbar">
            <a href="{{ route('trips.index') }}">Home</a>
            <a href="about.html">About</a>
            <a href="{{ route('trips.show')}}">Tours</a>
            <a href="destinations.html">Destinations</a>
            <a href="contact.html">Contact</a>
        </nav>
        <div class="new">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <div class="icons">
        <a class="fas fa-user" href="{{ route('trips.login') }}"></a>
            <!-- id="login-btn" -->
        </div>

    </section>

</header>
<!-- header section ends -->
<div class="loader-container">
    <img src={{ asset('images/loader.gif') }} alt="">
</div> 
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyBF_ngVkQmdeVMf276UMCArZYrL2l6O_uk",
      authDomain: "smarttrips-3084b.firebaseapp.com",
      projectId: "smarttrips-3084b",
      storageBucket: "smarttrips-3084b.appspot.com",
      messagingSenderId: "716034608595",
      appId: "1:716034608595:web:da8c360673bc636bac7326",
      measurementId: "G-BE7HD7YJ7B"
    };
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<!-- custom js file link -->
@yield('content')
<!--footer section starts-->
    <div class="footer">

        <div class="box-container">
            <div class="box" data-aos="zoom-out">
                <h3>Our location</h3>
                <a href="Egypt-destinations/cairo.html"> <i class="fas fa-map-marker-alt"> </i> cairo </a>
                <a href="Egypt-destinations/Alexandria.html"> <i class="fas fa-map-marker-alt"> </i> Alexandria </a>
                <a href="Egypt-destinations/dahab.html"> <i class="fas fa-map-marker-alt"> </i> Dahab </a>
                <a href="Egypt-destinations/harghada.html"> <i class="fas fa-map-marker-alt"> </i> Harghada </a>
                <a href="Egypt-destinations/Siwa.html"> <i class="fas fa-map-marker-alt"> </i> Siwa </a>
                <a href="Egypt-destinations/sharm-elsheikh.html"> <i class="fas fa-map-marker-alt"> </i> Sharm ElSheikh
                </a>
                <a href="Egypt-destinations/Luxor.html"> <i class="fas fa-map-marker-alt"> </i> Luxor</a>
                <a href="Egypt-destinations/marsa-matrouh.html"> <i class="fas fa-map-marker-alt"> </i> Marsa
                    Matrouh</a>
                <a href="Egypt-destinations/el-wahat.html"> <i class="fas fa-map-marker-alt"> </i> El Wahat</a>

            </div>

            <div class="box" data-aos="zoom-out">
                <h3>quick links</h3>
                <a href="../../home.html"> <i class="fas fa-arrow-right"> </i> home </a>
                <a href="../../about.html"> <i class="fas fa-arrow-right"> </i> About </a>
                <a href="../../tours.html"> <i class="fas fa-arrow-right"> </i> tours </a>
                <a href="../../html"> <i class="fas fa-arrow-right"> </i> Destinations </a>
                <a href="../../contact.html"> <i class="fas fa-arrow-right"> </i> contact </a>
            </div>

            <div class="box" data-aos="zoom-out">
                <h3>extra links</h3>
                <a href="profile.html"> <i class="fas fa-arrow-right"> </i> account info </a>
                <a href="contact.html"> <i class="fas fa-arrow-right"> </i> our services </a>
            </div>

            <div class="box" data-aos="zoom-out">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"> </i> +201116440052</a>
                <a href="#"> <i class="fas fa-phone"> </i> +201147393993</a>
                <a href="#"> <i class="fas fa-envelope"></i>SmartTrips@gmail.com</a>
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
