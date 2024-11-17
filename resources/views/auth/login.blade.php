@extends('layouts.app-home')

@section('content')
        
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        
        <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader-dark.jpg) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>Fast, secure and transparent marketplace.</h1>
                                <p class="lead">Welcome to Dilyastrend. Your decentralized blockchain hub!</p>
                            </div>
                            
                        <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-rounded padding40" data-bgcolor="#21273e">

                                <h3 class="mb10">Sign In</h3>

                                <h4><x-validation-errors class="mb-4" /></h4>

                                <p>Login using an existing account or create a new account <a href="register">here<span></span></a>.</p>
                                
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
                        </div>
                    </div>
                </div>
            </div>
        </section>		
        
    </div>

@endsection