<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Dilyastrend is a systemic marketplace in progress that accepts crytocurrencies along with fiat as a mode of payment. It is not just an ordinary marketplace; we are uniquely designed to serve as utilities for crypto projects while making it accessible to everyone.">
    <meta name="author" content="Dezenmart IT Team, CNScomputers">
    <meta name="keywords" content="eCommerce, Cryptocurrency, Web3.0, Blockchain, Job, Fashion, Artisan, Professional, Technology, Secure, Scalable, Maintainable">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/dezenmart-fav.png') }}">
    <title>Dezenmart - Connecting You</title>
    <link rel="icon" href="{{ asset('assets/images/logo/dezenmart-fav.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/de-grey.css') }}" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-04.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>

<!-- <script src="https://widget.sirena.app/get?token=239c0a7aedcc438a97b79c810f642eaa"></script> -->

<body class="dark-scheme de-grey">
    <div id="wrapper">

        <x-home-header></x-home-header>

        @yield('content')
    
        <x-home-footer></x-home-footer>
        
    </div><!-- wrapper -->
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/particles-settings.js') }}"></script>
        
    <script>
    
        //For FORMS
        // Disable buttons when clicked
        //SignIn
        function guestMessageF(form) {
            form.guestMessage.disabled = true;
            form.guestMessage.value = "Sending...";
            return true;
        }
    
        //Register
        function registerF(form) {
            form.register.disabled = true;
            form.register.value = "Please wait...";
            return true;
        }
    
    </script>
        
</body>

</html>