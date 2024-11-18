@extends('layouts.app-home')

@section('content')
        
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        
        <section id="section-hero" aria-label="section" class="pt20 pb20 vh-100" data-bgimage="url() bottom" style="background: url(;) center bottom / cover;">
            <div id="particles-js" style="background-size: cover;">
                <canvas class="particles-js-canvas-el" width="1583" height="284" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="v-center" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-md-6" style="background-size: cover;">
                            <div class="spacer-single" style="background-size: cover;"></div>

                            <h6 class="wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <span class="text-uppercase id-color-2">Dezenmart</span>
                            </h6>

                            <div class="spacer-10" style="background-size: cover;"></div>

                            <h1 class="wow fadeInUp animated" data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                Secure, fast, transparent and easy to use <span class="id-color-2">Telegram marketplace.</span>
                            </h1>

                            <p class="wow fadeInUp lead animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                            <span class="id-color-2">Buy</span> anytime and anywhere, <span class="id-color-2">sell</span> anytime and anywhere.
                            </p>

                            <div class="spacer-10" style="background-size: cover;"></div>

                            <a target="_blank" href="https://web.telegram.org" class="btn-main wow fadeInUp lead animated" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 1.25s; animation-name: fadeInUp;">Start Now</a>
                                        
                            <div class="row" style="background-size: cover;">
                                <div class="spacer-single" style="background-size: cover;"></div>
                                <div class="row" style="background-size: cover;">
                                        <div class="col-lg-4 col-md-6 col-sm-4 wow fadeInRight mb30 animated" data-wow-delay="1.1s" style="background-size: cover; visibility: visible; animation-delay: 1.1s; animation-name: fadeInRight;">
                                            <div class="de_count text-left" style="background-size: cover;">
                                                <h3><span>5,000</span>+</h3>
                                                <h5 class="id-color">Community</h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-4 wow fadeInRight mb30 animated" data-wow-delay="1.4s" style="background-size: cover; visibility: visible; animation-delay: 1.4s; animation-name: fadeInRight;">
                                            <div class="de_count text-left" style="background-size: cover;">
                                                <h3><span>2,000</span>+</h3>
                                                <h5 class="id-color">Listed Products</h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-4 wow fadeInRight mb30 animated" data-wow-delay="1.7s" style="background-size: cover; visibility: visible; animation-delay: 1.7s; animation-name: fadeInRight;">
                                            <div class="de_count text-left" style="background-size: cover;">
                                                <h3><span>5</span>+</h3>
                                                <h5 class="id-color">Major Partners</h5>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 xs-hide" style="background-size: cover;">
                            <img src="assets/images/misc/women-with-vr.png" class="img-fluid wow fadeInUp animated" data-wow-delay=".75s" alt="" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection