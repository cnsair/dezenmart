@extends('layouts.app-home')

@section('content')
        

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    
    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 mb-sm-30">
                <h3>Do you have any question or something to tell us?</h3>
                
                <!-- <form name="contactForm" id="contact_form" class="form-border" method="post" action=""> -->
                <form method="POST" action="{{ route('guest-message.store') }}" class="form-border" onsubmit="return guestMessageF(this);">
                    @csrf
                    
                    @if (session('status') === 'success')
                        <x-success-msg>
                            {{ __('Your message has been sent successfully.') }}
                        </x-success-msg>
                    @elseif (session('status') === 'failed')
                        <x-failed-msg>
                            {{ __('Ooops.. Something went wrong. Please try again later.') }}
                        </x-failed-msg>
                    @endif

                    <div class="field-set">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" :value="old('name')" required autofocus />
                        <x-input-error for="name" class="mt-2" style="color: #FF4433" />
                    </div>

                    <div class="field-set">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" :value="old('email')" required />
                        <x-input-error for="email" class="mt-2" style="color: #FF4433" />
                    </div>

                    <div class="field-set">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone (Optional)" :value="old('phone')" />
                        <x-input-error for="phone" class="mt-2" style="color: #FF4433" />
                    </div>

                    <div class="field-set">
                        <textarea name="message" id="message" class="form-control" placeholder="Your Message (1000 characters max)" required>{{ old('message') }}</textarea>
                        <x-input-error for="message" class="mt-2" style="color: #FF4433" />
                    </div>

                    <div class="spacer-half"></div>

                    <div id="submit">
                        <input type="submit" id="send_message" value="Send now" class="btn btn-main" />
                    </div>
                    
                </form>
            </div>
            
            <div class="col-lg-4">

                <div class="padding40 box-rounded mb30" data-bgcolor="#292F45">
                    <h3>Always Available</h3>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>Global</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i>
                            Support Email: <a href="mailto:support@dezenmart.com">support@dezenmart.com</a>
                        </span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i>
                            Information Email: <a href="mailto:info@dezenmart.com">info@dezenmart.com</a>
                        </span>
                    </address>
                </div>

            </div>
                
            </div>
        </div>

    </section>
</div>
    
@endsection