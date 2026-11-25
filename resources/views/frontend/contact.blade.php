@extends('frontend.master')


@section('title')

   Contact Us

@endsection


@section('body')


    <!-- Banner Section Start -->
    <section class="contact-banner banner-area">
        <div class="container-fluid">
            <form class="search-project search-form mt-96" id="project-search" action="#">
                <input type="search" required placeholder="Type to search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="contact-title row align-items-center text-center justify-content-between wow fadeInUp delay-0-2s py-128">
                <h1>CONTACT</h1>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Contact Form Area start -->
    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-between contact-content">
                <div class="col-lg-9 ct-form wow fadeInRight delay-0-2s">

                    <h4 class="text-center text-success"> {{session('message')}} </h4>

                    <form id="contactForm" class="contact-form rmt-55 contactForm" action="{{route('new.contact')}}" name="contactForm" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="name" name="phone" class="form-control" value="" placeholder="Phone" required>
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="contact-btn">Send a message</button>
                        </div>

                    </form>
                </div>


                @foreach($settings as $setting)
                <div class="contact-info wow fadeInLeft delay-0-2s">


                    <div class="section-title mb-32">
                        <h5 class="mb-32">Basic information</h5>
                        <p>Get in touch with us to learn more about interior or architecture design. We'd love to hear from you, here's how you can reach us...</p>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt" style="margin-right: 4px;"></i>
                        <span class="text"> {{$setting->address}} </span>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-phone-volume" style="margin-right: 4px;"></i> <a href="">
                            {{$setting->phone}} </a>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-envelope" style="margin-right: 4px;"></i>
                        <span class="text"><a href="mailto:info@indochine.com"> {{$setting->email}} </a></span>
                    </div>


                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->





@endsection
