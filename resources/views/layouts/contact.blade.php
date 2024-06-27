@extends('layouts.app')

@section('content')
    <!--contact section starts-->
    <div class="container contact ">

        <h1 class="heading" data-aos="zoom-out">contact us</h1>

        <section>
            <div class="row">

                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218360.18826593956!2d29.954885900000004!3d31.224110850000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1702420892032!5m2!1sen!2seg"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="flip-left"></iframe>

                <form action="/contact" method="POST" data-aos="flip-right">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alertc">
                      <span> {{ $error }} </span>  
                        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                    </div>
                    @endforeach
                @endif
                    @csrf
                    <h3>get in touch</h3>
                    @auth
                        <input type="text" name="username" placeholder="enter your name" class="box"
                            value="{{ auth()->user()->name }}" readonly>
                        <input type="email" name="email" placeholder="enter your email" class="box"
                            value="{{ auth()->user()->email }}" readonly>
                        <input type="tel" name="phone" placeholder="enter your number" class="box"
                            value="{{ auth()->user()->Mobile_number }}" readonly>
                    @endauth

                    @guest
                        <input type="text" name="username" required maxlength="50" placeholder="enter your name"
                            class="box">
                        <input type="email" name="email" required maxlength="255" placeholder="enter your email"
                            class="box">
                        <input type="tel" name="phone" required pattern="[0-9]*" inputmode="numeric" maxlength="20" min="0" max="9999999999"
                            placeholder="enter your number" class="box" >
                    @endguest

                    <textarea name="message" class="box" required maxlength="1000" cols="30" rows="10"></textarea>

                    <input type="submit" value="send message" name="send" class="btn">
                </form>

               
            </div>

            <div class="grid">

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <a href="tel:01116440052">+201116440052</a>
                    <a href="tel:01147393993">+201147393993</a>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <a href="mailto:smarttrips24@gmail.com">smarttrips24@gmail.com</a>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>office address</h3>
                    <a href="#">flat no. 01, a-1, alexandria, </a>
                    <a href="#">EGYPT </a>
                </div>

            </div>

            <div class="credit">
                &copy; copyright @ 2023 by <span>Team</span> | all
                rights reserved!
            </div>

        </section>

    </div>
    <!--contact section ends-->
@endsection