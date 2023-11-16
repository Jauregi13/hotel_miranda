<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script defer src="./js/sliders.js"></script>
        <script defer src="./js/menu.js"></script>
        <title>Home</title>
    </head>
    <body>
        <?php 
            include 'header.php';
            $title = 'About Us';
            $pageName = 'About';
            include 'breadcrumb.php';
        ?>

        <div class="about-content">

            <section class="about-content__video-content">
                <iframe class="about-content__video-content__video" src="https://www.youtube.com/embed/Bu3Doe45lcU" frameborder="0"></iframe>
                <h3 class="subtitle-section subtitle-section--small">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
            </section>

            <section class="about-content__icons-content">

                <div class="about-content__icons-content__icon-block">
                    <div class="about-content__icons-content__icon-block__icon about-content__icons-content__icon-block__icon--breakfast"></div>
                    <p class="about-content__icons-content__icon-block__text">BREAKFAST</p>
                </div>
                <div class="about-content__icons-content__icon-block">
                    <div class="about-content__icons-content__icon-block__icon about-content__icons-content__icon-block__icon--airport"></div>
                    <p class="about-content__icons-content__icon-block__text">AIRPORT PICKUP</p>
                </div>
                <div class="about-content__icons-content__icon-block">
                    <div class="about-content__icons-content__icon-block__icon about-content__icons-content__icon-block__icon--city"></div>
                    <p class="about-content__icons-content__icon-block__text">CITY GUIDE</p>
                </div>
                <div class="about-content__icons-content__icon-block">
                    <div class="about-content__icons-content__icon-block__icon about-content__icons-content__icon-block__icon--room"></div>
                    <p class="about-content__icons-content__icon-block__text">LUXURY ROOM</p>
                </div>

            </section>

            <section class="about-content__restaurant">

                <img class="about-content__restaurant__img" src="./img/restaurant.jpg" alt="restaurant">
                <h2 class="about-content__restaurant__title">RESTAURANT</h2>
                <h3 class="about-content__restaurant__subtitle">Get Restaurant Facilities & Many Other More</h3>
                <p class="about-content__restaurant__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <button class="about-content__restaurant__button button">TAKE A TOUR</button>
            </section>

            <section class="about-content__facilities">

                <h2 class="about-content__facilities__title title-section title-section--white">FACILITIES</h2>
                <h3 class="about-content__facilities__subtitle subtitle-section subtitle-section--white">Core Features</h3>
                <div class="swiper slider-type2 slider-type2--black">

                    <div class="swiper-wrapper swiper-wrapper--size-change">

                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature1.svg" alt="iconFeature1">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">01</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Have High Rating</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature2.svg" alt="iconFeature2">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">02</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Quiet Hours</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature3.svg" alt="iconFeature3">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">03</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Best Locations</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature4.svg" alt="iconFeature4">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">04</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Free Cancellation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature5.svg" alt="iconFeature5">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">05</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Payment Options</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature6.svg" alt="iconFeature6">
                                </div>
                                <span class="swiper-slide__icons__number swiper-slide__icons__number--opacity">06</span>
                            </div>
                            <h4 class="swiper-slide__title title-content title-content--white">Special Offers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            <section class="about-content__counters">
                <h2 class="about-content__counters__title title-section">COUNTER</h2>
                <h3 class="about-content__counters__subtitle subtitle-section">Some Fun Facts</h3>
                <div class="about-content__counters__content">
                    <div class="about-content__counters__content__counter">
                        <img src="./img/userIcon.svg" alt="userIcon">
                        <div class="about-content__counters__content__counter__info">
                            <h4 class="title-content title-content--big">8000</h4>
                            <p>Happy Users</p>
                        </div>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div class="about-content__counters__content__counter">
                        <img src="./img/reviewIcon.svg" alt="reviewIcon">
                        <div class="about-content__counters__content__counter__info">
                            <h4 class="title-content title-content--big">10M</h4>
                            <p>Reviews & Appriciate</p>
                        </div>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div class="about-content__counters__content__counter">
                        <img src="./img/countriesIcon.svg" alt="countriesIcon">
                        <div class="about-content__counters__content__counter__info">
                            <h4 class="title-content title-content--big">100</h4>
                            <p>Country Coverage</p>
                        </div>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
                <div class="swiper slider-type2">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img class="swiper-slide__img" src="./img/counter1.jpg" alt="counter1">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide__img" src="./img/counter2.jpg" alt="counter2">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </section>
        </div>

        <?php

            include 'footer.php'
        ?>
    
    </body>

</html>