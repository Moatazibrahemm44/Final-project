@extends('layouts.Main')
@section('title')
    tours Page
@endsection
@section('content')
    <section class="gallery" id="gallery">
        <div class="heading" data-aos="fade-down">
            <span> {{ $tours->description }} </span>
            <h1>we record memories</h1>
        </div>
        <div class="box-container" data-aos=>
            @foreach ($tourInfo as $tourInfo)
                <div class="box" data-aos="zoom-in">
                    <img src="{{ asset('images/' . $tourInfo->image_path) }}" class="image" alt="">
                    <span>{{ $tourInfo->day_info }}</span>
                    <h3>{{ $tourInfo->description }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    <div class="container contact">

        <h1 class="heading" data-aos="zoom-out">More Details</h1>

        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.33663491611!2d31.21726482386904!3d30.05955631661344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1716495682616!5m2!1sen!2seg"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="flip-left"></iframe>


            <form action="" method="" data-aos="flip-right">
                <h3>About trip</h3>
                <h1>Day 1: Arrival and Egyptian Museum</h1>
                <p>
                    Morning:<br>
                    Arrival in Cairo: Arrive at Cairo International Airport. Transfer to your hotel and check-in.<br>
                    Breakfast: Enjoy breakfast at the hotel.<br>
                    Late Morning:<br>
                    Egyptian Museum: Head to the Egyptian Museum, located in Tahrir Square. Spend a few hours exploring the
                    museum's vast collection of ancient Egyptian artifacts, including the treasures of Tutankhamun.<br>
                    Afternoon:<br>
                    Lunch: Have lunch at a local restaurant or café near the museum.<br>
                    Continue at the Egyptian Museum: Explore more exhibits or relax at a nearby café.<br>
                    Evening:<br>
                    Dinner: Enjoy a traditional Egyptian dinner at a local restaurant.<br>
                    Optional Activity: Consider a Nile River dinner cruise to enjoy the city lights and traditional
                    entertainment.
                </p>

                <h1>Day 2: Pyramids of Giza</h1>
                <p>
                    Morning:<br>
                    Breakfast: Start your day with a hearty breakfast at the hotel.<br>
                    Pyramids of Giza: Depart for the Giza Plateau to visit the iconic Pyramids of Giza – the Great Pyramid
                    of
                    Khufu, the Pyramid of Khafre, and the Pyramid of Menkaure. Don't miss the Sphinx, located nearby.<br>
                    Late Morning:<br>
                    Camel or Horseback Ride: Experience a camel or horseback ride around the pyramids for a unique
                    perspective.<br>
                    Afternoon:<br>
                    Lunch: Enjoy lunch at a restaurant with views of the pyramids.<br>
                    Solar Boat Museum: Visit the Solar Boat Museum, which houses the reconstructed Khufu ship, an ancient
                    Egyptian solar barque.<br>
                    Evening:<br>
                    Sound and Light Show: Stay for the evening Sound and Light Show at the Pyramids of Giza, which narrates
                    the
                    history of these ancient wonders.<br>
                    Dinner: Return to Cairo for dinner at a local restaurant.
                </p>

                <h1>Day 3: Khan el Khalili and Departure</h1>
                <p>
                    Morning:<br>
                    Breakfast: Enjoy breakfast at the hotel.<br>
                    Khan el Khalili Bazaar: Head to Khan el Khalili, Cairo's famous bazaar. Wander through the narrow
                    alleyways,
                    explore the vibrant market stalls, and shop for souvenirs, spices, jewelry, and traditional crafts.<br>
                    Afternoon:<br>
                    Lunch: Have lunch at one of the traditional cafés in the bazaar, such as El Fishawy, known for its
                    historical charm.<br>
                    Al-Azhar Mosque: Visit the nearby Al-Azhar Mosque, one of the oldest mosques in Cairo, and soak in its
                    rich
                    history and beautiful architecture.<br>
                    Late Afternoon:<br>
                    Return to Hotel: Return to your hotel to relax and prepare for departure.<br>
                    Evening:<br>
                    Departure: Transfer to Cairo International Airport for your departure flight.
                </p>

                <h1>Additional Tips:</h1>
                <p>
                    Guided Tours: Consider hiring a guide for a more in-depth understanding of the historical sites.<br>
                    Dress Code: Dress modestly, especially when visiting religious sites.<br>
                    Safety: Stay aware of your surroundings and keep your belongings secure, particularly in crowded areas.
                </p>

                <h1>Enjoy your trip to Cairo!</h1>
                <a href="/book/{{ $tours->id }}" class="btn">Book here</a>
            </form>

        </div>
    @endsection
