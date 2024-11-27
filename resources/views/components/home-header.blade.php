<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('home') }}">
                                    <img style="height: 50px;" alt="" src="{{ asset('assets/images/logo/dezenmart-1.png') }}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="{{ route('register') }}">Register</a></li>  
                            <li><a class="nav-hd" href="{{ route('login') }}">Sign In</a></li>
                        </ul>
                        <!-- mainmenu close -->
                        <div class="menu_side_area">
                            <a href="https://web.telegram.org" class="btn-main btn-wallet">
                                <i class="fa fa-telegram"></i><span>Start</span>
                            </a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> <!-- header close -->