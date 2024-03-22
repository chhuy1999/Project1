<section class="header position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <img class="header-color" src="{{ asset('storage/images/header-color.png') }}" alt="Color">
                <div class="logo-content">
                    <a href="/houter" class="no-underline">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo">
                        <span class="logo-text">Houter</span>
                    </a>
                    <div class="content">
                        <h2 class="header-subtitle">Find The Place To Live
                            <span class="header-subtitle-inside">Your Dreams</span>
                            Easily Here
                        </h2>
                        <p class="header-text">Everything you need about finding your place to live will be here, where
                            it will be easier for you</p>
                        <form action="" method="GET">
                            <div class="input-group-search mb-3">
                                <label class="search-place">
                                    <img class="location-img" src="{{ asset('storage/images/location.png') }}"
                                         alt="Search">
                                    <input type="text" class="form-control search-label"
                                           placeholder="Search for the location you want!" name="search">
                                    <button class="btn button-search" type="submit">
                                        Search
                                        <img src="{{ asset('storage/images/arrow-forward.png') }}" alt="Search">
                                    </button>
                                </label>
                            </div>
                        </form>
                        <p class="text-partner">Our Partnership</p>
                        <div class="logo-partner">
                            <a target="_blank" href="https://www.traveloka.com">
                                <img src="{{ asset('storage/images/tv-logo1.png') }}" alt="Logo travel">
                            </a>
                            <a target="_blank" href="https://www.tiket.com/">
                                <img src="{{ asset('storage/images/tv-logo2.png') }}" alt="Logo ticket">
                            </a>
                            <a target="_blank" href="https://www.airbnb.com">
                                <img src="{{ asset('storage/images/tv-logo3.png') }}" alt="Logo airbnb">
                            </a>
                            <a target="_blank" href="https://www.tripadvisor.com">
                                <img src="{{ asset('storage/images/tv-logo4.png') }}" alt="Logo tripadvisor">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--                End--}}
            <div class="col-md-6 col-12 top-banner">
                <div class="banner-slider">
                    <img src="{{ asset('storage/images/house-header.png') }}" alt="Banner" class="w-100">
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse-- navbar---collapse">
                            <ul class="navbar-nav navbar-nav-scroll">
                                <li class="nav-item">
                                    <a class="nav-link nav-button" aria-current="page" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-button" href="#">Article</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle nav-button" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Property
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">House</a></li>
                                        <li><a class="dropdown-item" href="#">Apartment</a></li>
                                        <li><a class="dropdown-item" href="#">Villa</a></li>
{{--                                        <li>--}}
{{--                                            <hr class="dropdown-divider">--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                            <button class="btn signup-button" type="submit">
                                                <span class="signup-text">
                                                    Sign Up!
                                                </span>
                            </button>
                        </div>
                    </nav>
                </div>

                <div class="customer-comment">
                    <div class="comment-items">
                        <div class="image multi-image">
                            <img src="{{ asset('storage/images/sub-image11.jpeg') }}" alt="People Header">
                            <img src="{{ asset('storage/images/sub-image12.jpeg') }}" alt="People Header">
                            <img src="{{ asset('storage/images/sub-image6.jpeg') }}" alt="People Header">
                        </div>
                        <div class="content-cmt">
                            <div class="header-cus-cmt">1K+ People</div>
                            <div class="header-cus-detail">Successfully Getting Home</div>
                        </div>
                    </div>
                    <div class="comment-items">
                        <div class="image">
                            <img src="{{ asset('storage/images/sold_house-header.png') }}" alt="People Header">
                        </div>
                        <div class="content-cmt">
                            <div class="header-cus-cmt">56 House</div>
                            <div class="header-cus-detail">Sold Monthly</div>
                        </div>
                    </div>
                    <div class="comment-items">
                        <div class="image">
                            <img src="{{ asset('storage/images/sub-image13.jpeg') }}" alt="People Header">
                        </div>
                        <div class="content-cmt">
                            <div class="header-cus-cmt">4K+</div>
                            <div class="header-cus-detail">People Looking for New Homes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
