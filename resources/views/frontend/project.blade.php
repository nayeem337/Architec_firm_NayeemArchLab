@extends('frontend.master')


@section('title')

  Our Project

@endsection


@section('body')



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



@endsection
