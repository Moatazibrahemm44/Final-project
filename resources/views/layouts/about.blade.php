@extends('layouts.app')

@section('content')
    <!-- about section starts -->

    <div class="container about">

        <h1 class="heading" data-aos="zoom-out">about us</h1>

        <section>

            <div class="details">
                <div class="box" data-aos="zoom-in">
                    <h3>why chouse us?</h3>
                    <P>SmartTrips, the world's largest travel guidance platform*, helps hundreds of millions of people each
                        month** become better travelers, from planning to booking to taking a trip. Travelers across the
                        globe use the SmartTrips site and app to discover where to stay, what to do and where to eat based
                        on guidance from those who have been there before.</P>
                        <a href="{{ route('trips.contact') }}" class="btn">contact us</a>

                </div>
            </div>

            <div class="grid">

                <div class="box" data-aos="fade-up">
                    <img src="images/about1.png" alt="">
                    <h3>Easy bookings</h3>
                    <p>We give you a complete solution. Your dedicated consultant and team will take care of everything and
                        everyone: negotiating the best rates, securing corporate discounts, making bookings and providing
                        traveller tracking, 24/7 support and transparent cost reporting – every practical aspect of your
                        corporate travel program</p>
                </div>

                <div class="box" data-aos="fade-up" data-oas-delay="400">
                    <img src="images/about2.png" alt="">
                    <h3>travel world</h3>
                    <p>Our team of experienced guides has the knowledge and passion to provide you with the best adventure
                        possible– that is what we strive to deliver every trek. No matter the country, we’ll take you to the
                        most magical places in the world, ensuring you feel comfortable and safe the entire time.</p>
                </div>

                <div class="box" data-aos="fade-up" data-oas-delay="600">
                    <img src="images/about3.png" alt="">
                    <h3>enjoy tours</h3>
                    <p>At SmartTrips, we understand that the joy of travel is often magnified when shared with friends.
                        That's why we've crafted a platform that goes beyond just booking trips; it's a place where you can
                        create and share unforgettable journeys with your closest companions.</p>
                </div>

            </div>

        </section>


    </div>

    <!-- about section ends -->

    <!-- reviews section starts -->

    <div class="container reviews">

        <h1 class="heading" data-aos="zoom-out">client's reviews</h1>

        <section class="grid">

            @foreach ($reviews as $review)
                <div class="box" data-aos="fade-up">
                    <img src="images/pic-1.png" alt="">
                    <h3>{{ $review->user->name }}</h3>
                    <p>{{ $review->comment }}</p>
                    <div class="stars">
                        @for ($i = 0; $i < $review->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
            @endforeach

        </section>
        
        @auth
            <section class="rating">

                {{-- <div class="post">
                    <div class="text">Thanks for rating !</div>
                    <div class="edit">EDIT</div>
                </div> --}}

                <div class="feedback-form" data-aos="fade-up">
                   
                    <h2>Feedback Form</h2>

                    <form method="POST" action="/about" id="feedbackForm">
                        @csrf
                        <div class="rating">
                            <!-- Notice that the stars are in reverse order -->

                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5">&#9733;</label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4">&#9733;</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3">&#9733;</label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2">&#9733;</label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1">&#9733;</label>
                        </div>
                        <div class="comment">
                            <label for="comment">Tell us more:</label><br>
                            <textarea id="comment" name="comment" placeholder="Share your thoughts for this!"></textarea>
                        </div>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>

                {{-- <div class="star-widget">
                <p>Make your review</p>
                
                
                <form action="/about" method="POST">
                    @csrf
                    <input type="radio" name="rate" id="rate-5" value="1">
                    <label for="rate-5" class="fa fa-star"></label>
                    <input type="radio"name="rate" id="rate-4" value="2">
                    <label for="rate-4" class="fa fa-star"></label>
                    <input type="radio" name="rate" id="rate-3" value="3">
                    <label for="rate-3" class="fa fa-star"></label>
                    <input type="radio" name="rate" id="rate-2" value="4">
                    <label for="rate-2" class="fa fa-star"></label>
                    <input type="radio" name="rate" id="rate-1" value="5">
                    <label for="rate-1" class="fa fa-star"></label>

                    <div class="textarea">
                        <textarea cols="30" name="comment" placeholder="Share your thoughts for this!"></textarea>
                    </div>
                    
                    <button class="btn" type="submit">post</button>
                </form>
                
            </div> --}}
            </section>

        @endauth




    </div>

    <!-- reviews section ends -->
@endsection
