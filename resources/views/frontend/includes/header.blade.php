

<div class="page-wrapper <?php echo (isset($lightMode) && $lightMode) ? 'light-mode' : ''; ?>">


<!-- Navbar Start -->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper black-120-bg">
        <div class="container clearfix">

            <div class="header-inner rel d-flex align-items-center">



                @foreach($settings as $setting)
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset($setting->logo) }}" alt="Logo" title="Logo" style="max-height: 120px; width: auto;">
                            </a>
                        </div>
                    </div>
                @endforeach






                <div class="nav-outer ms-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">

                            <div class="mobile-logo">

                                <a href="{{route('home')}}">
                                    <img src="" alt="Logo" title="Logo">
                                </a>

                            </div>



                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li><a href="{{route('home')}}"> Home </a></li>

                                <li><a href="{{route('about-us')}}"> About </a></li>
                                <li><a href="{{route('our-project')}}"> Project </a></li>



{{--                                <li class="dropdown"><a href="#">Projects</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="projects-01.php">Projects 01</a></li>--}}
{{--                                        <li><a href="projects-02.php">Projects 02</a></li>--}}
{{--                                        <li><a href="projects-03.php">Projects 03</a></li>--}}
{{--                                        <li><a href="projects-04.php">Projects 04</a></li>--}}
{{--                                        <li><a href="projects-05.php">Projects 05</a></li>--}}
{{--                                        <li><a href="project-details.php">Project Details</a></li>--}}
{{--                                        <li><a href="project-details-02.php">Project Details 02</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}



{{--                                <li class="dropdown"><a href="#">pages</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="404.php">404 Error</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

{{--                                <li class="dropdown"><a href="#">blog</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="blog.php">blog</a></li>--}}
{{--                                        <li><a href="blog-details.php">blog details</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

                                <li><a href="{{route('contact-us-home')}}">Contact</a></li>


                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
                <!-- Search Button -->
                <div class="search-btns">
                    <span class="search-icon"><i class="far fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>




