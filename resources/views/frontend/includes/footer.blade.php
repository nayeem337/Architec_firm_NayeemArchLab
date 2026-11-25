
<!-- Footer Section Start -->
<!-- footer area start -->
<footer class="main-footer py-128 black-120-bg">
    <div class="footer-top mb-96">
        <div class="container">

            <div class="col-lg-10">
                <h2>The greatest <span class="white">architecture</span> & <span class="white">interior design</span> company, <span class="white">best</span> in its industry.</h2>
                <h2>Serving <span class="white">luxury services</span> worldwide. </h2>
            </div>

        </div>
    </div>

    @foreach($settings as $setting)

    <div class="footer-bottom">
        <div class="container">
            <div class="row">



{{--                <div class="copyright-area col-sm-12 col-md-4 col-lg-6">--}}
{{--                    © Copyright NAYEEM All rights reserved.--}}
{{--                </div>--}}






                {{-- <div class="copyright-area col-sm-12 col-md-4 col-lg-6">
                    © {{ date('d-m-Y') }} | 🌻✨ Crafted with Care, Built with Precision. ✨🌻
        Where Creativity Meets Technology! 💻🔧
                    <a href="https://www.linkedin.com/in/jannatul-nayeem-8825b9168/" target="_blank" rel="noopener noreferrer" style="color: #0066cc; font-weight: 600; text-decoration: none;">
                         NAYEEM
                    </a>
                </div> --}}




<div class="copyright-area col-sm-12 col-md-4 col-lg-6">
    © {{ date('d-m-Y') }} |
    🌻✨ Crafted with Care, Built with Precision. ✨🌻
    Where Creativity Meets Technology! 💻🔧
    <a href="https://www.linkedin.com/in/jannatul-nayeem-8825b9168/" target="_blank" rel="noopener noreferrer" style="color: #0066cc; font-weight: 600; text-decoration: none;">
        NAYEEM
    </a>
</div>




               {{-- <div class="copyright-area col-sm-12 col-md-4 col-lg-6" style="font-size: 15px; line-height: 1.6; color: #444;">
    <ol style="padding-left: 20px; margin: 0;">
        <li>© {{ date('d-m-Y') }}</li>
        <li>🌻✨ <strong>Crafted with Care, Built with Precision</strong> ✨🌻</li>
        <li><em>Where Creativity Meets Technology</em> 💻🔧</li>
        <li>
            <a href="https://www.linkedin.com/in/jannatul-nayeem-8825b9168/" target="_blank" rel="noopener noreferrer" style="color: #0066cc; font-weight: 600; text-decoration: none;">
                — NAYEEM
            </a>
        </li>
    </ol>
</div> --}}





                <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3">
                    <div class="footer-bottom-text">
                        <div class="d-flex content">
                            {{-- <div class="left">
                                <h4 class="h4-rotate ">CONTACT</h4>
                            </div> --}}

                            <div class="right info">

                                <p> {!! nl2br(e($setting->address)) !!} </p>

                                <p><a href=""> {{$setting->phone}}  </a></p>
                                <p><a href=""> {{$setting->email}}  </a></p>

                                <p><a href="mailto:info@indochine.com">  </a></p>

                                <div class="footer-social">
                                    <span>Socials:</span>
                                    <a href=""><i class="fab fa-dribbble"></i></a>

                                    <a href=""><i class="fab fa-facebook-f"></i></a>

                                   <a href="https://github.com/nayeem337" target="_blank"><i class="fab fa-github"></i>
                                    </a>

                                    <a href="https://www.linkedin.com/in/jannatul-nayeem-8825b9168/" target="_blank"><i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12  col-sm-4 col-md-3 col-lg-2">
                    <div class="footer-bottom-text">
                        <div class="d-flex content">
                            <div class="left">
                                <h4 class="h4-rotate key-link">KEY LINKS</h4>
                            </div>
                            <ul class="right links">
                                <li><a class="" href="{{route('home')}}">Home</a></li>
                                <li><a class="" href="{{route('about-us')}}">About</a></li>
                                <li><a class="" href="{{route('our-project')}}">Projects</a></li>
{{--                                <li><a class="" href="blog.php">Blog</a></li>--}}
                                <li><a class="" href="{{route('contact-us-home')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sm-none col-md-1 col-lg-1">
                    <div class="footer-bottom-text text-white">
                        <button class="to-top scroll-to-target content" data-target="html">
                            <p>TO TOP</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endforeach

</footer>
<!-- footer area end -->

<!-- Back to top start -->

<!-- Scroll Top Button -->
<!-- for backTop -->
<button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

</div>

<!--End pagewrapper-->


