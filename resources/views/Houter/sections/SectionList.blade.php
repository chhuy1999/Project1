<section class="list position-relative">
    <div class="container">
        <div class="row row-container">
            <div class="header-text">
                <div class="header-line"></div>
                <p class="sub-text">Our Recommendation</p>
            </div>
            <div class="menu-carousel">
                <div class="text-contain">
                    Featured House
                </div>
                <div class="classify-button">
                    <div class="group-button" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="house-classify" id="house-classify1"
                               autocomplete="off" checked onclick="showListHouse()">
                        <label class="btn btn-outline-success" for="house-classify1">
                            <img src="{{ asset('storage/images/house-icon.png') }}" alt="House1">
                            House
                        </label>

                        <input type="radio" class="btn-check" name="house-classify" id="house-classify2"
                               autocomplete="off" onclick="showListHouse()">
                        <label class="btn btn-outline-success" for="house-classify2">
                            <img src="{{ asset('storage/images/villa-icon.png') }}" alt="House1">
                            Villa
                        </label>

                        <input type="radio" class="btn-check" name="house-classify" id="house-classify3"
                               autocomplete="off" onclick="showListHouse()">
                        <label class="btn btn-outline-success" for="house-classify3">
                            <img src="{{ asset('storage/images/apartment-icon.png') }}" alt="House1">
                            Apartment
                        </label>
                    </div>
                </div>
                <div class="carousel-control-button" id="slide-change">
                    <button class="btn btn-outline-success prev-btn" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <
                    </button>

                    <button class="btn btn-outline-success next-btn" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        >
                    </button>
                </div>

            </div>
            <div class="list-house-items">
                <div id="carouselExample" class="slider slider-show-house">
                    <div class="house-item">
                        <img src="{{ asset('storage/images/house-1.png') }}" class="house-item-img" alt="House1">
                        <div class="house-name">Roselands House</div>
                        <div class="house-price">$ 35.000.000></div>
                        <div class="owner-information">
                            <img class="mid-avt-img" src="{{ asset('storage/images/sub-image6.jpeg') }}" alt="Owner">
                            <div class="owner-detail">
                                <div class="owner-name">Dianne Russell</div>
                                <div class="house-address">Manchester, Kentucky</div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-2.png') }}" class="house-item-img" alt="House1">
                            <div class="house-name">Woodlandside</div>
                            <div class="house-price">$ 20.000.000></div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image14.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Robert Fox</div>
                                    <div class="house-address">Dr. San Jose, South Dakota</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-3.png') }}" class="house-item-img" alt="House3">
                            <div class="house-name">The Old Lighthouse</div>
                            <div class="house-price">$ 44.000.000</div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image5.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Ronald Richards</div>
                                    <p class="house-address">Santa Ana, Illinois</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <img src="{{ asset('storage/images/house-1.png') }}" class="house-item-img" alt="House1">
                        <div class="house-name">Roselands House</div>
                        <div class="house-price">$ 35.000.000></div>
                        <div class="owner-information">
                            <img class="mid-avt-img" src="{{ asset('storage/images/sub-image6.jpeg') }}" alt="Owner">
                            <div class="owner-detail">
                                <div class="owner-name">Dianne Russell</div>
                                <div class="house-address">Manchester, Kentucky</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="carouselExample2" class="slider slider-show-house">
                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-2.png') }}" class="house-item-img" alt="House1">
                            <div class="house-name">Woodlandside</div>
                            <div class="house-price">$ 20.000.000></div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image14.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Robert Fox</div>
                                    <div class="house-address">Dr. San Jose, South Dakota</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-3.png') }}" class="house-item-img" alt="House3">
                            <div class="house-name">The Old Lighthouse</div>
                            <div class="house-price">$ 44.000.000</div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image5.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Ronald Richards</div>
                                    <p class="house-address">Santa Ana, Illinois</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <img src="{{ asset('storage/images/house-1.png') }}" class="house-item-img" alt="House1">
                        <div class="house-name">Roselands House</div>
                        <div class="house-price">$ 35.000.000></div>
                        <div class="owner-information">
                            <img class="mid-avt-img" src="{{ asset('storage/images/sub-image6.jpeg') }}" alt="Owner">
                            <div class="owner-detail">
                                <div class="owner-name">Dianne Russell</div>
                                <div class="house-address">Manchester, Kentucky</div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-2.png') }}" class="house-item-img" alt="House1">
                            <div class="house-name">Woodlandside</div>
                            <div class="house-price">$ 20.000.000></div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image14.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Robert Fox</div>
                                    <div class="house-address">Dr. San Jose, South Dakota</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="carouselExample3" class="slider slider-show-house">
                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-3.png') }}" class="house-item-img" alt="House3">
                            <div class="house-name">The Old Lighthouse</div>
                            <div class="house-price">$ 44.000.000</div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image5.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Ronald Richards</div>
                                    <p class="house-address">Santa Ana, Illinois</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <img src="{{ asset('storage/images/house-1.png') }}" class="house-item-img" alt="House1">
                        <div class="house-name">Roselands House</div>
                        <div class="house-price">$ 35.000.000></div>
                        <div class="owner-information">
                            <img class="mid-avt-img" src="{{ asset('storage/images/sub-image6.jpeg') }}" alt="Owner">
                            <div class="owner-detail">
                                <div class="owner-name">Dianne Russell</div>
                                <div class="house-address">Manchester, Kentucky</div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-2.png') }}" class="house-item-img" alt="House1">
                            <div class="house-name">Woodlandside</div>
                            <div class="house-price">$ 20.000.000></div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image14.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Robert Fox</div>
                                    <div class="house-address">Dr. San Jose, South Dakota</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="house-item">
                        <div class="item-card">
                            <img src="{{ asset('storage/images/house-3.png') }}" class="house-item-img" alt="House3">
                            <div class="house-name">The Old Lighthouse</div>
                            <div class="house-price">$ 44.000.000</div>
                            <div class="owner-information">
                                <img class="mid-avt-img" src="{{ asset('storage/images/sub-image5.jpeg') }}" alt="Owner">
                                <div class="owner-detail">
                                    <div class="owner-name">Ronald Richards</div>
                                    <p class="house-address">Santa Ana, Illinois</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
