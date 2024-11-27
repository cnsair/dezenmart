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
                        <div class="col-md-6 xs-hide" style="background-size: cover;">
                            <div class="spacer-single" style="background-size: cover;"></div>

                            <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <span class="text-uppercase id-color-2">Dezenmart</span>
                            </h2>

                            <div class="spacer-10" style="background-size: cover;"></div>

                            <h1 class="wow fadeInUp animated" data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                Secure, fast, transparent and easy to use <span class="id-color-2">Telegram</span> marketplace.
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
                                                <h3><span>2,000</span>+</h3>
                                                <h5 class="id-color">Community</h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-4 wow fadeInRight mb30 animated" data-wow-delay="1.4s" style="background-size: cover; visibility: visible; animation-delay: 1.4s; animation-name: fadeInRight;">
                                            <div class="de_count text-left" style="background-size: cover;">
                                                <h3><span>3,000</span>+</h3>
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
                        <!-- <div class="col-md-6 xs-hide" style="background-size: cover;"> -->
                        <div class="col-md-4 offset-md-2">
                            <div class="box-rounded padding40 img-fluid wow fadeInUp animated" data-bgcolor="#1B1212" data-wow-delay=".75s" alt="" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">

                                <h3 class="mb10">Admin Sign In</h3>

                                <h4><x-validation-errors class="mb-4" /></h4>

                                <p>Only admins have access through this channel. Please use our Telegram channel at the top to access Dezenmart's rich features if you're not an admin.</p>
                                
                                <form class="form-border mb-4" name="contactForm" id='contact_form' method="POST" action="{{ route('login') }}" onsubmit="return signInF(this);">
                                    @csrf
                                <!-- <form name="contactForm" id='contact_form' class="form-border" method="post" action=''> -->

                                    <div class="field-set">
                                        <input type="text" tabindex="1" class="form-control" required name="UnameOrEmail" placeholder="Username or Email">
                                    </div>
                                    
                                    <div class="field-set">
                                        <input type="password" tabindex="2" class="form-control" required name="Password" placeholder="Password">

                                        <small class="">
                                            <a style="color: fff" href="forgot-password">Forgot Password?</a>
                                        </small>
                                    </div>
                                    
                                    <div class="spacer-single"></div>
                                    
                                    <div class="field-set">
                                        <input class="btn btn-main btn-flat btn-fullwidth color-2" type="submit" id="contact-submit" data-submit="...Sending" name="signIn" value="SIGNIN">
                                        <input type="hidden" name="INSERT" value="2">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="spacer-single"></div>
                                </form>
                            </div>
                        </div>   
                            

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
    
    </div>
@endsection