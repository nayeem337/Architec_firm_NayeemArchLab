{{--@extends('frontend.master')--}}

{{--@section('title')--}}
{{--    Service Details--}}
{{--@endsection--}}

{{--@section('body')--}}





{{--    @foreach($services as $service)--}}
{{--    <!-- Banner Section Start -->--}}
{{--    <section class="banner-area pt-324 pb-250" style="background-image: url({{asset($service->image)}});">--}}
{{--        <div class="container text-center">--}}
{{--            <div class="row align-items-center justify-content-between">--}}
{{--                <div class="banner-content wow fadeInUp delay-0-2s">--}}
{{--                    <h1>PROJECT DETAILS</h1>--}}
{{--                    <div aria-label="breadcrumb" class="mt-32">--}}
{{--                        <ul class="breadcrumb wow fadeInUp delay-0-4s">--}}
{{--                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>--}}
{{--                            <li class="breadcrumb-item"> Service Details </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <form class="search-project search-form mt-96" id="project-search" action="#">--}}
{{--                <input type="search" required placeholder="Type to search...">--}}
{{--                <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- Banner Section End -->--}}

{{--    <!-- Architecture Projects Area start -->--}}
{{--    <section class="project-details py-128">--}}
{{--        <div class="container">--}}
{{--            <div class="content">--}}
{{--                <div class="mb-64 align-items-center">--}}

{{--                    <div class="row detail-image mb-64 wow fadeInLeft delay-0-1s">--}}
{{--                        <img src="{{asset($service->image)}}" alt="Apartment">--}}
{{--                    </div>--}}

{{--                    <div class="row detail-info mb-64 wow fadeInLeft delay-0-1s">--}}
{{--                        <div class="col-lg-6 info text-left">--}}
{{--                            <h2 class="mb-16">VILLA DESIGN</h2>--}}
{{--                            <p>PROJECT NAME: Mountain Villa In US</p>--}}
{{--                            <p>PROJECT DATE: 15 January 2024</p>--}}
{{--                            <p>PROJECT LOCATION: Manhattan NY</p>--}}
{{--                            <p>ARCHITECT: Aaron Williams</p>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-6 text-right">--}}
{{--                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem.</p>--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}




{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
{{--    <!-- Architecture Projects Area end -->--}}






{{--@endforeach--}}



{{--@endsection--}}



































{{--@extends('frontend.master')--}}

{{--@section('title')--}}
{{--    Service Details--}}
{{--@endsection--}}

{{--@section('body')--}}

{{--    @foreach($services as $service)--}}
{{--        <!-- Banner Section Start -->--}}
{{--        <section class="banner-area pt-324 pb-250"--}}
{{--                 style="background: url('{{ asset($service->image) }}') no-repeat center center;--}}
{{--                     background-size: cover;--}}
{{--                     height: 500px;">--}}
{{--            <div class="container text-center">--}}
{{--                <div class="row align-items-center justify-content-between">--}}
{{--                    <div class="banner-content wow fadeInUp delay-0-2s">--}}
{{--                        <h1>{{ strtoupper($service->title) }}</h1>--}}
{{--                        <div aria-label="breadcrumb" class="mt-32">--}}
{{--                            <ul class="breadcrumb wow fadeInUp delay-0-4s">--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>--}}
{{--                                <li class="breadcrumb-item">Service Details</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <form class="search-project search-form mt-96" id="project-search" action="#">--}}
{{--                    <input type="search" required placeholder="Type to search...">--}}
{{--                    <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Banner Section End -->--}}

{{--        <!-- Service Detail Section Start -->--}}
{{--        <section class="project-details py-128">--}}
{{--            <div class="container">--}}
{{--                <div class="content">--}}
{{--                    <div class="mb-64 align-items-center">--}}

{{--                        <div class="row detail-info mb-64 wow fadeInLeft delay-0-1s">--}}
{{--                            <div class="col-lg-6 info text-left">--}}
{{--                                <h2 class="mb-16">{{ $service->title }}</h2>--}}
{{--                                <p><strong>PROJECT NAME:</strong> {{ $service->title }}</p>--}}
{{--                                <p><strong>PROJECT DATE:</strong> {{ $service->created_at->format('d F Y') }}</p>--}}
{{--                                <p><strong>PROJECT LOCATION:</strong> Manhattan NY</p>  Make dynamic if needed--}}
{{--                                <p><strong>ARCHITECT:</strong> Aaron Williams</p>  Make dynamic if needed--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-6 text-right">--}}
{{--                                <p>{!! $service->description !!}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Service Detail Section End -->--}}
{{--    @endforeach--}}

{{--@endsection--}}



{{--@extends('frontend.master')--}}

{{--@section('title')--}}
{{--    Service Details--}}
{{--@endsection--}}

{{--@section('body')--}}

{{--    @foreach($services as $service)--}}
{{--        <!-- Banner Section Start -->--}}
{{--        <section class="banner-area pt-324 pb-250"--}}
{{--                 style="background: url('{{ asset($service->image) }}') no-repeat center center;--}}
{{--                     background-size: cover;--}}
{{--                     height: 500px;--}}
{{--                     width: 100%;--}}
{{--                     max-width: 70%;--}}
{{--                     margin: 0 auto;--}}
{{--                     position: relative;--}}
{{--                     overflow: hidden;--}}
{{--                     border-radius: 8px;--}}
{{--                     box-shadow: 0 4px 12px rgba(0,0,0,0.1);">--}}
{{--            <div class="container text-center" style="width: 100%;">--}}
{{--                <div class="row align-items-center justify-content-between">--}}
{{--                    <div class="banner-content wow fadeInUp delay-0-2s">--}}
{{--                        <h1>{{ strtoupper($service->title) }}</h1>--}}
{{--                        <div aria-label="breadcrumb" class="mt-32">--}}
{{--                            <ul class="breadcrumb wow fadeInUp delay-0-4s">--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>--}}
{{--                                <li class="breadcrumb-item">Service Details</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <form class="search-project search-form mt-96" id="project-search" action="#">--}}
{{--                    <input type="search" required placeholder="Type to search...">--}}
{{--                    <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Banner Section End -->--}}

{{--        <!-- Service Detail Section Start -->--}}
{{--        <section class="project-details py-128">--}}
{{--            <div class="container">--}}
{{--                <div class="content">--}}
{{--                    <div class="mb-64 align-items-center">--}}
{{--                        <div class="row detail-info mb-64 wow fadeInLeft delay-0-1s">--}}
{{--                            <div class="col-lg-6 info text-left">--}}
{{--                                <h2 class="mb-16">{{ $service->title }}</h2>--}}
{{--                                <p><strong>PROJECT NAME:</strong> {{ $service->title }}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 text-right">--}}
{{--                                <p>{!! $service->description !!}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Service Detail Section End -->--}}
{{--    @endforeach--}}

{{--@endsection--}}

























@extends('frontend.master')

@section('title')
    Service Details
@endsection

@section('body')

    @foreach($services as $service)
        <!-- Banner Section Start -->
        <section class="banner-area pt-324 pb-250"
                 style="background: url('{{ asset($service->image) }}') no-repeat center center;
                     background-size: cover;
                     height: 800px;
                     width: 100%;
                     max-width: 70%;
                     margin: 0 auto;
                     position: relative;
                     overflow: hidden;
                     border-radius: 8px;
                     box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <div class="container text-center" style="width: 100%;">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>{{ strtoupper($service->title) }}</h1>
                        <div aria-label="breadcrumb" class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item">Service Details</li>
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

        <!-- Service Detail Section Start -->
        <section class="project-details py-128">
            <div class="container">
                <div class="content">
                    <div class="mb-64 align-items-center">
                        <div class="row detail-info mb-64 wow fadeInLeft delay-0-1s">
                            <div class="col-lg-6 info text-left">
                                <h2 class="mb-16">{{ $service->title }}</h2>
{{--                                <p><strong>PROJECT NAME:</strong> {{ $service->title }}</p>--}}
                            </div>
                            <div class="col-lg-6 text-right">
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Detail Section End -->
    @endforeach

@endsection












