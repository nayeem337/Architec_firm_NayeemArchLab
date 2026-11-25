<!-- Left Sidebar - style you can find in sidebar.scss  -->

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}"
                       aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu"> NayeemArchLab </span>
                    </a>
                </li>




                <li>
                    <a class="" href="{{route('setting')}}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> Setting </span>
                    </a>

                    <a class="" href="{{route('view.blog')}}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> Blog </span>
                    </a>

                    <a class="" href="{{route('view.contact')}}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> Contact </span>
                    </a>




                    {{--                        <ul aria-expanded="false" class="collapse">--}}
                    {{--                            <li><a href="app-calendar.html">Add Setting </a></li>--}}
                    {{--                            <li><a href="app-chat.html"> Manage Setting </a></li>--}}
                    {{--                        </ul>--}}


                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('home.slider')}}"> Slider </a></li>
                        <li><a href="{{route('home.work_process')}}"> Work Process </a></li>
                        <li><a href="{{route('home.testimonial')}}"> Testimonial </a></li>
                    </ul>



                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> About </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('about.who-we-are')}}"> Who we are </a></li>
                        <li><a href="{{route('about.mission')}}"> Mission </a></li>
                        <li><a href="{{route('about.vision')}}"> Vision </a></li>
                        <li><a href="{{route('about.faq')}}"> FAQ </a></li>
                    </ul>

                    <a class="" href="{{route('view.service')}}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> Service </span>
                    </a>


                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu"> Project </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('view.category')}}"> Category </a></li>
                        <li><a href="{{route('view.sub-category')}}"> Sub Category </a></li>
                        <li><a href="{{route('view.project')}}"> Projects </a></li>

{{--                        <li><a href="{{route('view.blog')}}"> Blog </a></li>--}}
{{--                        <li><a href="{{route('view.contact')}}"> Contact </a></li>--}}
                    </ul>





                </li>





            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<!-- End Left Sidebar - style you can find in sidebar.scss  -->
