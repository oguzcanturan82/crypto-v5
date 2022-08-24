<div>
    <?php
        require_once("imports/base-css.php");
        BaseCss();
    ?>
    
    <header class="site-header header-s1 is-sticky">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="social">
                            <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                            <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                            <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                            <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 al-right">
                        <ul class="top-nav">
                            <!--<li><a href="faqs.html">Help</a></li>-->
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #end Topbar -->
        <!-- Navbar -->
        <div class="navbar navbar-primary">
            <div class="container relative">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img class="logo logo-dark" alt="logo" src="images/logo.png">
                    <img class="logo logo-light" alt="logo" src="images/logo_white.png">
                </a>
                <!-- #end Logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="quote-btn"><a class="btn" href="contact.html"><span>get started</span></a></div>
                </div>
                <!-- MainNav -->
                <nav class="navbar-collapse collapse" id="mainnav">
                    <ul class="nav navbar-nav">
                        <!--<li class="dropdown"><a href="#" class="dropdown-toggle">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home - Default</a></li>
                                <li><a href="index-wallet.html">Home - Wallet</a></li>
                                <li><a href="index-mining.html">Home - Mining</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="teams.html">Teams</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Service Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="service.html">Service List</a></li>
                                        <li><a href="service-single.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BitCoin Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="work-process.html">How it Works</a></li>
                                        <li><a href="buy-sell.html">Buy &amp; Sell</a></li>
                                        <li><a href="wallet-features.html">Wallet Features</a></li>
                                        <li><a href="market-data.html">Market Data</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Miscellaneous Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="signup.html">Sign In/Sign Up</a></li>
                                        <li><a href="faqs.html">Faq/Support</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>-->
                        <!--<li><a href="buy-sell.html">buy &amp; Sell</a></li>-->
                        <li><a href="/about">About</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li class="quote-btn hidden-xs hidden-sm"><a class="btn" href="#">Bağış Yap</a></li>
                    </ul>
                </nav>
                <!-- #end MainNav -->
            </div>
        </div>
        <!-- #end Navbar -->
    </header>

    <?php
        require_once("imports/base-js.php");
        BaseJs();
    ?>
</div>
