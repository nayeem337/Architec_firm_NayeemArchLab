@extends('frontend.master')


@section('title')
    Home Page
@endsection


@section('body')



<!-- Hero Section Start -->
<section class="hero-area mt-92 pb-64 black-120-bg">
    <div class="container pb-64">
        <form class="search-project search-form mt-96" id="project-search" action="">
            <input type="search" required placeholder="Type to search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <!-- Single Carousel for All Home Sliders -->
        <div class="carousel slide" id="recipeCarousel" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach($home_sliders as $index => $home_slider)
                    <button type="button" data-bs-target="#recipeCarousel"
                            data-bs-slide-to="{{ $index }}"
                            class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <!-- Slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($home_sliders as $index => $home_slider)
                    <div class="row carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex">
                            <div class="col-lg-2">
                                <h1 class="rotate-hero">{{ $home_slider->title_name }}</h1>
                            </div>
                            <div class="col-lg-10 d-flex hero-text-img">
                                <div class="hero-content">
                                    <div class="wow fadeInUp delay-0-2s">
                                        <h6>{!! $home_slider->description !!}</h6>


                                        <a href="{{route('service-details')}}" class="hero-btn wow fadeInUp delay-0-1s">
                                            Read More
                                            <span class="btn-icon">
                                                <span class="circle"></span>
                                                <span class="dot"></span>
                                                <span class="line"></span>
                                                <span class="fa fa-long-arrow-right"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-img">
                                    <a href="{{route('service-details')}}">
                                        <img class="hero-img wow zoomIn"
                                             src="{{ asset($home_slider->image) }}"
                                             alt="hero image"
                                             title="hero image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Optional: Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>












{{--about--}}


<div class="container">
    <div class="accordion">
        <ul>

            @foreach($who_we_ares as $who_we_are)
            <a href="#">
                <li
                    style="
                background-image: url({{asset($who_we_are->image)}});">
                    <div>
                        <p class="tag"> Who we are ! </p>
                        <div class="accordion_item_inf">
                            <p class="accordion_item_inf_title"> Who we are ! </p>
                            <p class="accordion_item_inf_text"> {!! $who_we_are->description !!}  </p>
                        </div>
                    </div>
                </li>
            </a>
            @endforeach


            @foreach($missions as $mission)
            <a href="#">
                <li
                    style="
                background-image: url({{asset($mission->image)}});">
                    <p class="tag"> Our Mission </p>
                    <div>
                        <div class="accordion_item_inf">
                            <p class="accordion_item_inf_title"> Our Mission </p>
                            <p class="accordion_item_inf_text"> {!! $mission->description !!} </p>
                        </div>
                    </div>
                </li>
            </a>
                @endforeach


                @foreach($Visions as $Vision)
            <a href="#">
                <li
                    style="
                background-image: url({{asset($Vision->image)}});">
                    <p class="tag"></p>
                    <div>
                        <div class="accordion_item_inf">
                            <p class="accordion_item_inf_title"> Vision </p>
                            <p class="accordion_item_inf_text"> {!! $Vision->description !!} </p>
                        </div>
                    </div>
                </li>
            </a>
                @endforeach


        </ul>
    </div>
</div>
<style>
    *,
    *:before,
    *:after {
        position: relative;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        border: 0;
        vertical-align: baseline;
        outline: none;
        font-family: inherit;
    }

    .accordion,
    .accordion ul,
    .accordion ul li > div {
        width: 100%;
    }

    .accordion ul a,
    .accordion li .accordion_item_inf {
        transition: all 0.3s;
    }

    .accordion {
        overflow: hidden;
    }

    .accordion ul {
        display: table;
    }

    .accordion a {
        display: table-cell;
    }

    .accordion li {
        display: block;
        height: 750px;
        background-position: center center;
        background-size: cover;
        background-origin: 0 0;
        object-fit: cover;
        box-shadow: -5px 0 40px 1px #000;
    }

    .accordion li > div {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .accordion li .accordion_item_inf {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 50px 20px 20px;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 1) 5%,
            rgba(0, 0, 0, 0)
        );
        color: #fff;
        font-family: "Montserrat", sans-serif;
        opacity: 0;
    }

    .accordion a:hover .accordion_item_inf {
        opacity: 1;
    }
    .accordion a:hover .tag {
        display: none;
        font-family: "Montserrat", sans-serif;
    }

    .accordion .accordion_item_inf_title {
        font-size: 30px;
        font-weight: bold;
        z-index: 2;
        margin-bottom: 20px;
        font-family: "Montserrat", sans-serif;
    }

    .accordion .accordion_item_inf_text {
        position: relative;
        font-size: 15px;
        max-width: 400px;
        width: 100%;
        font-family: "Montserrat", sans-serif;
        margin-bottom: 30px;
    }

    .tag {
        position: absolute;
        color: #fff !important;
        font-size: 30px;
        font-weight: bold;
        background: #000;
        border-radius: 7px;
        padding: 10px;
        color: #000;
        bottom: 50px;
        font-family: "Montserrat", sans-serif;
        left: 50px;
        transform: rotate(-90deg);
        transform-origin: left bottom;
    }

    @media only screen and (max-width: 500px) {
        .accordion li {
            height: 350px;
        }
        .tag {
            font-size: 16px;
            bottom: 20px;
            left: 40px;
        }
    }
    @media only screen and (min-width: 501px) and (max-width: 768px) {
        .accordion li {
            height: 450px;
        }
        .tag {
            font-size: 16px;
            bottom: 20px;
            left: 40px;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        var $accordion_a_w_no_hover = 16;
        ($accordion_a = $(".accordion a")),
            ($accordion_a_w_hover =
                100 - $accordion_a_w_no_hover * $accordion_a.length + "%"),
            ($accordion_a_w = 100 / $accordion_a.length);

        $accordion_a.css("width", $accordion_a_w + "%");

        $accordion_a.hover(
            function () {
                $accordion_a.css("width", $accordion_a_w_no_hover + "%");
                $(this).css("width", $accordion_a_w_hover);
            },
            function () {
                $accordion_a.css("width", $accordion_a_w + "%");
            }
        );
    });
</script>


{{--about--}}
























<!-- Service Section Start -->
<section class="service-area black-120-bg py-128 justify-content-center">
    <div class="container-fluid">

        <div class="container d-flex section-heading mb-96 justify-content-between align-items-center">
            @if($services->isNotEmpty())
                <div class="section-title">
                    <h2 class="wow fadeInUp delay-0-2s">{{ strtoupper($services[0]->title) }}</h2>
                </div>
            @endif

            <div class="carousel-buttons">
                <button class="prev" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <button class="next" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
        </div>

        <div class="carousel slide justify-content-center" id="servicerecipeCarousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">

                @foreach($services as $index => $service)
                    <div class="carousel-item @if($index == 0) active @endif">
                        <div class="col-lg-6 service-act">
                            <a href="{{route('service-details')}}"><img src="{{ asset($service->image) }}" alt="Service Image"></a>
                            <div class="carousel-caption">
                                <div class="big-text mb-16">{{ strtoupper($service->title ?? 'SERVICE') }}</div>

                                <p class="mb-32">{!! $service->description !!}</p>

                                <a href="{{route('service-details')}}">
                                    <span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

<!-- Services Section End -->















<!-- Architecture Projects Area start -->
<section class="architecture-area py-128">
    <div class="container">
        <div class="row rel z-1 justify-content-center">
            <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">ARCHITECTURE PROJECTS</span>
                <h2>LATEST WORKS</h2>
            </div>
        </div>

        <!-- Category Tabs -->
        <ul class="tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s" id="category-tabs" role="tablist">
            <!-- Add All tab first -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active"
                        id="cat-tab-all"
                        data-bs-toggle="tab"
                        data-bs-target="#cat-pane-all"
                        type="button"
                        role="tab"
                        aria-controls="cat-pane-all"
                        aria-selected="true">
                    ALL
                </button>
            </li>
            @foreach($categories as $index => $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                            id="cat-tab-{{ $category->id }}"
                            data-bs-toggle="tab"
                            data-bs-target="#cat-pane-{{ $category->id }}"
                            type="button"
                            role="tab"
                            aria-controls="cat-pane-{{ $category->id }}"
                            aria-selected="false">
                        {{ strtoupper($category->name) }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Category Tab Content -->
        <div class="tab-content" id="category-tabs-content">
            <!-- All Projects Tab -->
            <div class="tab-pane fade show active"
                 id="cat-pane-all"
                 role="tabpanel"
                 aria-labelledby="cat-tab-all">

                @php
                    $allProjects = collect();
                    foreach ($categories as $category) {
                        $allProjects = $allProjects->merge($category->projects);
                    }
                @endphp

                @if($allProjects->count() > 0)
                    <div class="category-slider slider-all">
                        @foreach($allProjects as $project)
                            <div class="project-slide">
                                <div class="row apartment-image wow fadeInLeft delay-0-1s mb-4">
                                    <a href="{{ route('project.details', $project->id) }}">
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0 mb-5">
                                    <div class="col-lg-6 pro-title">
                                        <a href="{{ route('project.details', $project->id) }}"><h3>{{ $project->title }}</h3></a>
                                        <span class="category">ARCHITECTURE / LANDSCAPE</span>
                                    </div>
                                    <div class="col-lg-6 pro-desc">
                                        {{--                                        <p>{{ Str::limit($project->description, 200) }}</p>--}}

                                        <p class="mb-32">{!! $project->description !!}</p>


                                        <a href="{{ route('project.details', $project->id) }}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="no-projects text-center py-5">
                        <p>No projects found.</p>
                    </div>
                @endif
            </div>

            @foreach($categories as $index => $category)
                <div class="tab-pane fade"
                     id="cat-pane-{{ $category->id }}"
                     role="tabpanel"
                     aria-labelledby="cat-tab-{{ $category->id }}">

                    @if($category->projects->count() > 0)
                        <div class="category-slider slider-{{ $category->id }}">
                            @foreach($category->projects as $project)
                                <div class="project-slide">
                                    <div class="row apartment-image wow fadeInLeft delay-0-1s mb-4">
                                        <a href="{{ route('project.details', $project->id) }}">
                                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="row apartment-content wow fadeInRight delay-0-1s rp-0 mb-5">
                                        <div class="col-lg-6 pro-title">
                                            <a href="{{ route('project.details', $project->id) }}"><h3>{{ $project->title }}</h3></a>
                                            <span class="category">ARCHITECTURE / LANDSCAPE</span>
                                        </div>
                                        <div class="col-lg-6 pro-desc">

                                            {{--                                            <p>{{ Str::limit($project->description, 200) }}</p>--}}
                                            <p class="mb-32">{!! $project->description !!}</p>
                                            <a href="{{ route('project.details', $project->id) }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="no-projects text-center py-5">
                            <p>No projects found for this category.</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .category-slider {
        position: relative;
    }

    .project-slide {
        padding: 15px;
    }


    /*imaze size*/

    .apartment-image img {
        width: 100%;
        height: 800px;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .pro-title h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .pro-title .category {
        color: #777;
        font-size: 14px;
    }

    .pro-desc p {
        margin-bottom: 15px;
    }

    .read-more {
        color: #000;
        text-decoration: underline;
        font-weight: 600;
    }

    /* Simplified arrow styles */
    .category-slider .slick-prev,
    .category-slider .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
        width: 40px;
        height: 40px;
        font-size: 0;
        border: none;
        background: transparent;
        color: #000;
    }

    .category-slider .slick-prev {
        left: 0;
    }

    .category-slider .slick-next {
        right: 0;
    }

    .category-slider .slick-prev:before {
        content: '←';
        font-size: 40px;
    }

    .category-slider .slick-next:before {
        content: '→';
        font-size: 40px;
    }

    /* Slick dots */
    .category-slider .slick-dots {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        text-align: center;
        list-style: none;
        padding: 0;
    }

    .category-slider .slick-dots li {
        display: inline-block;
        margin: 0 5px;
    }

    .category-slider .slick-dots li button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ccc;
        border: none;
        font-size: 0;
        padding: 0;
    }

    .category-slider .slick-dots li.slick-active button {
        background: #000;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        // Initialize sliders for each category
        $('.category-slider').each(function(){
            $(this).slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                fade: false,
                cssEase: 'ease-in-out',
                pauseOnHover: true,
                pauseOnFocus: false
            });
        });

        // Handle tab switching
        $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e){
            var target = $(e.target).attr("data-bs-target");
            var slider = $(target).find('.category-slider');

            if (slider.hasClass('slick-initialized')) {
                slider.slick('refresh');
                slider.slick('slickPlay');
            }
        });
    });
</script>

















<!-- Interior Projects Section Start -->

  <section class="interior-area black-110-bg py-128 justify-content-center">
    <div class="container-fluid">

        <div class="container rel z-1 justify-content-center text-center">
            <div class="text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">INTERIOR PROJECTS</span>
                <h2>LATEST WORKS</h2>
            </div>
        </div>

        <!-- Nav Tabs - Grouped by Subcategories -->
        <div class="container section-heading">
            <div class="nav-fill-left">
                <ul class="tab-style-one nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s" id="subcategory-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#tab-all" type="button" role="tab" aria-controls="tab-all" aria-selected="true">ALL</button>
                    </li>
                    @php
                        $subcategories = App\Models\SubCategory::has('projects')->get();
                    @endphp
                    @foreach($subcategories->sortBy('name') as $subcategory)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="{{ $subcategory->id }}-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $subcategory->id }}" type="button" role="tab" aria-controls="tab-{{ $subcategory->id }}" aria-selected="false">
                                {{ strtoupper($subcategory->sub_category_name) }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="subcategory-tabsContent">
            <!-- All Projects Tab -->
            <div class="tab-pane fade show active" id="tab-all" role="tabpanel" aria-labelledby="all-tab">
                <div class="interior-slider" id="slider-all">
                    @php
                        $allProjects = App\Models\Project::with('subCategory')->get();
                    @endphp
                    @foreach($allProjects as $project)
                        <div class="interior-slide">
                            <div class="interior-act">
                                <a href="{{ route('project.details', $project->id) }}">
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                                </a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">{{ $project->subCategory->name }}</span>
                                    <a href="{{ route('project.details', $project->id) }}">
                                        <h5 class="mb-32">{{ $project->title }}</h5>
                                    </a>
{{--                                    <p class="mb-32">{{ Str::limit($project->description, 100) }}</p>--}}

                                    <p class="mb-32">{!! $project->description !!}</p>
                                    <a href="{{ route('project.details', $project->id) }}" class="hero-btn">Read More
                                        <span class="btn-icon">
                                            <span class="fa fa-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @foreach($subcategories as $subcategory)
                <div class="tab-pane fade" id="tab-{{ $subcategory->id }}" role="tabpanel" aria-labelledby="{{ $subcategory->id }}-tab">
                    <div class="interior-slider" id="slider-{{ $subcategory->id }}">
                        @foreach($subcategory->projects as $project)
                            <div class="interior-slide">
                                <div class="interior-act">
                                    <a href="{{ route('project.details', $project->id) }}">
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                                    </a>
                                    <div class="carousel-caption">
                                        <span class="sub-title mb-16">{{ $subcategory->name }}</span>
                                        <a href="{{ route('project.details', $project->id) }}">
                                            <h5 class="mb-32">{{ $project->title }}</h5>
                                        </a>
{{--                                        <p class="mb-32">{{ Str::limit($project->description, 100) }}</p>--}}


                                        <p class="mb-32">{!! $project->description !!}</p>
                                        <a href="{{ route('project.details', $project->id) }}" class="hero-btn">Read More
                                            <span class="btn-icon">
                                                <span class="fa fa-long-arrow-right"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<style>
    .interior-slider {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        scroll-behavior: smooth;
    }

    .interior-slider::-webkit-scrollbar {
        display: none;
    }

    .interior-slide {
        flex: 0 0 auto;
        width: 80%;
        scroll-snap-align: start;
        padding: 0 15px;
    }

    .interior-act {
        position: relative;
        margin-bottom: 30px;
    }


    /*image size*/

    .interior-act img {
        width: 100%;
        height: 850px;
        object-fit: cover;
    }

    .carousel-caption {
        position: relative;
        left: auto;
        right: auto;
        padding: 20px 0;
        color: #fff;
        text-align: left;
    }

    .hero-btn {
        display: inline-block;
        color: #fff;
        text-decoration: none;
        margin-top: 15px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all sliders
        function initSliders() {
            // Auto-slide function for each slider
            function autoSlide(sliderId) {
                const slider = document.getElementById(sliderId);
                if (!slider) return;

                let currentIndex = 0;
                const slides = slider.querySelectorAll('.interior-slide');
                const slideCount = slides.length;

                if (slideCount <= 1) return; // No need to slide if only one item

                const intervalId = setInterval(() => {
                    currentIndex = (currentIndex + 1) % slideCount;
                    const scrollPosition = currentIndex * (slides[0].offsetWidth + 30);
                    slider.scrollTo({
                        left: scrollPosition,
                        behavior: 'smooth'
                    });
                }, 3000); // 3 seconds interval

                // Store interval ID on slider element for cleanup
                slider.dataset.intervalId = intervalId;
            }

            // Initialize auto-slide for all sliders
            const allSliders = document.querySelectorAll('.interior-slider');
            allSliders.forEach(slider => {
                autoSlide(slider.id);

                // Pause on hover
                slider.addEventListener('mouseenter', () => {
                    if (slider.dataset.intervalId) {
                        clearInterval(parseInt(slider.dataset.intervalId));
                    }
                });

                slider.addEventListener('mouseleave', () => {
                    autoSlide(slider.id);
                });
            });
        }

        // Initialize sliders when page loads
        initSliders();

        // Reinitialize sliders when tab changes
        document.querySelectorAll('#subcategory-tabs .nav-link').forEach(tab => {
            tab.addEventListener('shown.bs.tab', function (event) {
                // Clean up old intervals
                document.querySelectorAll('.interior-slider').forEach(slider => {
                    if (slider.dataset.intervalId) {
                        clearInterval(parseInt(slider.dataset.intervalId));
                    }
                });

                // Initialize sliders again
                initSliders();
            });
        });
    });

</script>
















    <!-- Timeline Area start -->
    <section class="timeline-area py-128 black-90-bg">
        <div class="container">

            <div class="row section-heading mb-96">

                <div class="section-title  col-sm-6 col-lg-6">
                    <h2 class="wow fadeInUp delay-0-2s"> WORK PROCESS </h2>
                </div>

                <div class="button  col-sm-6 col-lg-6">
                    <a class="theme-btn" href="{{route('contact-us-home')}}">Contact Us</a>
                </div>

            </div>


            <div class="row align-items-center">
                <div class=" col-md-2 col-lg-2">

                    <div class="timeline-content wow fadeInRight delay-0-2s">

{{--                        <div class="timeline-item">--}}

{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">01</div>--}}

{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">02</div>--}}

{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">03</div>--}}

{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">04</div>--}}

{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">05</div>--}}

{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <img class="ishow" src="{{asset('/')}}frontend/assets/images/work-process/ruler.png">--}}
{{--                            <img class="ifade" src="{{asset('/')}}frontend/assets/images/work-process/ruler-3.png">--}}
{{--                            <div class="icon h2">06</div>--}}

{{--                        </div>--}}

                    </div>
                </div>


                <div class=" col-md-10 col-lg-10">
                    <div class="timeline-images wow fadeInLeft delay-0-2s">
                        <div>

                            @foreach($work_processes as $work_process)
                            <div class="content">
                                <span class="h5 title"> IDEAS </span>
                                <p class="description"> {!! $work_process->description !!} </p>
                            </div>

                            <img src="{{$work_process->image}}" alt="Timeline">


                        </div>

{{--                        <div>--}}
{{--                            <div class="content">--}}
{{--                                <span class="h5 title">CONCEPT</span>--}}
{{--                                <p class="description">Find out  your design ambitions. Your timescales, budgets. Build a detailed brief. Identify your design preferences. Develop architectural layouts for your property. Design styles and influences. Create renders and early 3D models describing the volumetric aspects of the design.</p>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/work-process/2.jpg" alt="Timeline">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <div class="content">--}}
{{--                                <span class="h5 title">DESIGN</span>--}}
{{--                                <p class="description">Drawings, scaled floor plans showing furniture placement, mood boards,  color, material,...</p>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/work-process/3.jpg" alt="Timeline">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <div class="content">--}}
{{--                                <span class="h5 title">CALCULATE</span>--}}
{{--                                <p class="description">Defining price, providing the price of items upon which the final product will be built. </p>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/work-process/4.jpg" alt="Timeline">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <div class="content">--}}
{{--                                <span class="h5 title">EXECUTION</span>--}}
{{--                                <p class="description">Prepares details  of works,  construction, installations and finishing.</p>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/work-process/5.jpg" alt="Timeline">--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <div class="content">--}}
{{--                                <span class="h5 title">EVALUATION</span>--}}
{{--                                <p class="description">Surveys, interviews, walkthroughs, compare and comment on design works.</p>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/work-process/6.jpg" alt="Timeline">--}}
{{--                        </div>--}}





                    </div>

                    @endforeach

                </div>
            </div>
        </div>



    </section>












{{--    <!-- Reviews Area start -->--}}
{{--    <section class="reviews-area py-128 black-100-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="testimonials-slider wow fadeInUp delay-0-4s">--}}
{{--                <div class="testimonial-item">--}}
{{--                    <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <div class="h2 author-text">“We loved this company! Because the finished project not only beautiful but also exactly what we hoped. I give the project 5 out of 5 stars and strongly recommend.”</div>--}}
{{--                    <img class="testi-img" src="{{asset('/')}}frontend/assets/images/testimonials/author-1.jpg">--}}
{{--                    <h5>Olivia Carpenter</h5>--}}
{{--                    <p class="designations">Business analyst at Apple</p>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item">--}}
{{--                    <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <div class="h2 author-text">“I loved this company! And give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>--}}
{{--                    <img class="testi-img" src="{{asset('/')}}frontend/assets/images/testimonials/author-2.jpg">--}}
{{--                    <h5>David John</h5>--}}
{{--                    <p class="designations">Business analyst at Apple</p>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item">--}}
{{--                    <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                        <i class="fa fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <div class="h2 author-text">“Love love love this company! I give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>--}}
{{--                    <img class="testi-img" src="{{asset('/')}}frontend/assets/images/testimonials/author-3.jpeg">--}}
{{--                    <h5>Lara Smith</h5>--}}
{{--                    <p class="designations">Business analyst at Apple</p>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Reviews Area end -->--}}















{{--    <!-- CTA Area start -->--}}
{{--    <section class="cta-area pt-140 pb-110 bgs-cover" style="background-image: url({{asset('/')}}frontend/assets/images/background/cta.png);">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="video-content-part text-center wow fadeInUp delay-0-2s">--}}
{{--                    <span class="sub-title">SUBSCRIBE</span>--}}
{{--                    <div class="cta-content wow fadeInUp delay-0-4s">--}}
{{--                        <h2>Want some design <span class="white">tips?</h2>--}}
{{--                        <h2> Join</span> our <span class="white">email list</span> for design <span class="white">tips, news</span> & <span class="white">more!</span></h2>--}}
{{--                    </div>--}}
{{--                    <form class="cta-form mt-96" action="#">--}}
{{--                        <input type="text" required placeholder="Your Email Address">--}}
{{--                        <button type="submit" class="btn-white-bg">Subscribe</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- CTA Area end -->--}}






















{{--    <!-- Blog Area start -->--}}
{{--    <section class="blog-area blog-home py-128 black-100-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row section-heading mb-96">--}}
{{--                <div class="section-title col-sm-6 col-lg-6">--}}
{{--                    <h2 class="wow fadeInUp delay-0-2s">LATEST NEWS</h2>--}}
{{--                </div>--}}
{{--                <div class="button col-sm-6 col-lg-6">--}}
{{--                    <a class="theme-btn" href="blog.html">More News</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 item text-center">--}}
{{--                    <div class="blog-item wow fadeInUp delay-0-2s black-30-bg ">--}}
{{--                        <div class="content ">--}}
{{--                            <h6><a href="blog-details.html">Hotel Design Ideas</a></h6>--}}
{{--                            <hr>--}}
{{--                            <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>--}}
{{--                            <div class="image">--}}
{{--                                <img src="{{asset('/')}}frontend/assets/images/blog/blog-1.jpg" alt="Blog">--}}
{{--                            </div>--}}
{{--                            <ul class="blog-meta mb-16">--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-user"></i>--}}
{{--                                    <a hrefs="#">Admin</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-comment-dots"></i> 1 Comment--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>--}}
{{--                            <a href="blog-details.html" class="theme-btn">Read more</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 item text-center">--}}
{{--                    <div class="blog-item wow fadeInUp delay-0-2s black-120-bg ">--}}
{{--                        <div class="content ">--}}
{{--                            <h6><a href="blog-details.html">Best Design Tips</a></h6>--}}
{{--                            <hr>--}}
{{--                            <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>--}}
{{--                            <div class="image">--}}
{{--                                <img src="{{asset('/')}}frontend/assets/images/blog/blog-2.jpg" alt="Blog">--}}
{{--                            </div>--}}
{{--                            <ul class="blog-meta mb-16">--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-user"></i>--}}
{{--                                    <a href="#">Admin</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-comment-dots"></i> 1 Comment--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>--}}
{{--                            <a href="blog-details.html" class="theme-btn">Read more</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 item text-center">--}}
{{--                    <div class="blog-item wow fadeInUp delay-0-2s black-30-bg ">--}}
{{--                        <div class="content ">--}}
{{--                            <h6><a href="blog-details.html">Trending house</a></h6>--}}
{{--                            <hr>--}}
{{--                            <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>--}}
{{--                            <div class="image">--}}
{{--                                <img src="{{asset('/')}}frontend/assets/images/blog/blog-3.png" alt="Blog">--}}
{{--                            </div>--}}
{{--                            <ul class="blog-meta mb-16">--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-user"></i>--}}
{{--                                    <a href="#">Admin</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="fal fa-comment-dots"></i> 1 Comment--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>--}}
{{--                            <a href="blog-details.html" class="theme-btn">Read more</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Blog Area end -->--}}










@endsection
