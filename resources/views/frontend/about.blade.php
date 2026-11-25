@extends('frontend.master')


@section('title')

    About

@endsection


@section('body')




    <!-- Banner Section Start -->
    <section class="banner-area text-black pt-324 pb-250" style="background-image: url({{'/'}}frontend/assets/images/about/test_background.webp);">
        <div class="container text-center">
            <div class="row align-items-center justify-content-between">
                <div class="banner-content wow fadeInUp delay-0-2s">

                    <h1>ABOUT US</h1>

                    <div aria-label="breadcrumb" class="mt-32">
                        <ul class="breadcrumb wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item">About Us</li>
                        </ul>
                    </div>

                </div>

            </div>


            <form class="search-project search-form mt-96" id="project-search" action="#">
                <input type="search" required placeholder="Type to search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>


        </div>
    </section>
    <!-- Banner Section End -->





    <!-- About Style 2 Start -->
    <section class="about-style-2 py-128">
        <div class="container">

            @foreach($who_we_ares as $who_we_are)
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 left">

                    <div class="section-title wow fadeInUp delay-0-3s">
                        <h2> Where imagination meets reality </h2>

                        <div class="wow fadeInUp delay-0-4s mb-45">
                            <ul class="tab-style-one nav nav-pills nav-fill mb-32 wow fadeInUp delay-0-4s">

                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#apart-tap1">Who We Are</a>
                                </li>


                                @foreach($missions as $mission)
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#apart-tap2">Mission</a>
                                </li>


                                @foreach($Visions as $Vision)
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#apart-tap3">Vision</a>
                                </li>



                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="apart-tap1">
                                    <p> {!! $who_we_are->description !!}  </p>
{{--                                    <p> {{$who_we_are->description}} </p>--}}
                                </div>

                                <div class="tab-pane fade" id="apart-tap2">
                                    <p>{!! $mission->description !!} </p>
                                </div>


                                <div class="tab-pane fade" id="apart-tap3">
                                    <p> {!! $Vision->description !!} </p>
                                </div>

                            </div>
                        </div>


                        <div class="button">
                            <a class="btn-white-bg" href="contact-light.php">Contact Us</a>
                        </div>


                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">



{{--                    <div class="imgs">--}}
{{--                        <img src="{{'/'}}frontend/assets/images/about//3-1.png" >--}}
{{--                        <img class="hovershow" src="{{'/'}}frontend/assets/images/about//about-right.jpg" >--}}
{{--                    </div>--}}




                    <div class="imgs">
                        <img src="{{asset($mission->image)}}" >
                        <img class="hovershow" src="{{asset($Vision->image)}}" >
                    </div>



                </div>



            </div>
            @endforeach
            @endforeach
            @endforeach

        </div>

    </section>





    <!-- Service Section Start -->
    <section class="service-area-2 black-90-bg py-128">
        <div class="container">
            <div class="row mb-96 text-center">
                <div class="col-12">
                    <h2 class="text-white mb-4">Our Services</h2>
                    <p class="text-muted">Explore what we offer to our valued clients</p>
                </div>
            </div>

            <div class="row justify-content-center g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow rounded-4 p-3 text-center bg-dark text-white border-0">
                            <div class="icon mb-3">
                                <i class="fa fa-house fa-2x text-warning"></i>
                            </div>
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded-3 mb-3" loading="lazy" style="height: 250px; object-fit: cover;">
                            <h5 class="mb-2">
                                <a href="#" class="text-white text-decoration-none hover-text-warning">
                                    {{ $service->title }}
                                </a>
                            </h5>
{{--                            <p class="text-muted">{{ Str::limit($service->description, 120) }}</p>--}}
                              <p> {!! $service->description !!} </p>
                            {{-- <a href="project-details-light.php"><i class="fa fa-long-arrow-right text-warning"></i></a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services Section End -->







{{--    FAQ START--}}



    <section class="faq-area py-128 black-110-bg">



        <div class="container">

            <div class="section_title_faq">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
             </div>

            <div class="accordion" id="accordionExample">




                @foreach($f_a_qs as $key => $f_a_q)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $key }}">
                            <button
                                class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $key }}"
                                aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $key }}">
                                {{ $f_a_q->title }}
                            </button>
                        </h2>
                        <div
                            id="collapse{{ $key }}"
                            class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                            aria-labelledby="heading{{ $key }}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $f_a_q->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>

        <style>

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                outline: none;
            }

            .section_title_faq h2 {
                font-size: 67px;
                color: #fff;
                text-transform: capitalize;
                margin-bottom: 60px;
            text-align: center;
            }

            .accordion-item {
                border: none !important;
            }
            .accordion-button:focus {
                outline: none !important;
                box-shadow: none !important;
            }
            .accordion-button::after {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
            }
            .accordion-button:not(.collapsed)::after {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
                transform: rotate(-180deg);
            }
            .accordion-button.collapsed {
                background: #000;
                color: #fff;
                font-family: "Montserrat", sans-serif;
            }
            .accordion-button:not(.collapsed) {
                background: #000;
                font-family: "Montserrat", sans-serif;
                color: #fff;
            }
            button:focus:not(:focus-visible) {
                outline: none !important;
                box-shadow: none !important;
            }
            .accordion-body {
                background-color: #2c2c2c;
                color: #fff;
            }
            .accordion-body:focus {
                font-family: "Montserrat", sans-serif;
                border: 0;
                    }

            @media only screen and (max-width: 500px) {
                .section_title_faq h2 {
                    font-size: 32px;
                }
            }
            @media only screen and (min-width: 501px) and (max-width: 768px) {
                .section_title_faq h2 {
                    font-size: 46px;
                }
                      }

                </style>


    </section>

    {{--    FAQ END--}}






@endsection
