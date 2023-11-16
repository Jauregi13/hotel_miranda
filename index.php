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
            include 'header.php'
        ?>

        <div class="home-content">

            <section class="home-content__banner-home">

                <div class="home-content__banner-home__content">

                    <p class="home-content__banner-home__content__text paragraph paragraph--title-banner">THE ULTIMATE LUXURY EXPERIENCE</p>
                    <h1 class="home-content__banner-home__content__title title-page">The Perfect Base For You</h1>

                    <div class="home-content__banner-home__content__buttons">

                        <button class="home-content__banner-home__content__buttons__tour button">TAKE A TOUR</button>
                        <button class="home-content__banner-home__content__buttons__learn button button--dark">LEARN MORE</button>

                    </div>
                </div>
            </section>

            <section class="home-content__booking-calendar">

                <form class="home-content__booking-calendar__form">

                    <label for="arrival">Arrival Date</label>
                    <input type="date" name="arrival">

                    <label for="departure">LeDeparture Date</label>
                    <input type="date" name="departure">

                    <input type="submit" value="CHECK AVAILABILITY" class="button button--calendar" name="check"/>


                </form>
            </section>

            <section class="home-content__about-us">
                <div class="home-content__about-us__info">
                    <h2 class="home-content__about-us__info__title title-section">ABOUT US</h2>
                    <h3 class="home-content__about-us__info__subtitle subtitle-section">Discover Our Underground.</h3>
                    <p class="home-content__about-us__info__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="home-content__about-us__info__button button">BOOK NOW</button>
                </div>
                
                <div class="home-content__about-us__extra-info">

                    <div class="home-content__about-us__extra-info__team">
                        <div class="home-content__about-us__extra-info__team__image"></div>
                        <div class="home-content__about-us__extra-info__team__icons">
                            <img src='./img/teamIcon1.svg' alt="teamIcon1" />
                            <img src="./img/teamIcon2.svg" alt="teamIcon2" class="home-content__about-us__extra-info__team__icons__icon2"/>
                        </div>
                        <h4 class="home-content__about-us__extra-info__team__title title-content">Strong Team</h4>
                        <p class="home-content__about-us__extra-info__team__text paragraph paragraph--black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="home-content__about-us__extra-info__luxury">

                        <div class="home-content__about-us__extra-info__luxury__image"></div>
                        <div class="home-content__about-us__extra-info__luxury__room">
                            <img src="./img/luxuryRoomIcon.svg" alt="luxury Room">
                            <h4 class="home-content__about-us__extra-info__luxury__room__title title-content title-content--white">Luxury Room</h4>
                            <p class="home-content__about-us__extra-info__luxury__room__text paragraph paragraph--white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                </div>
                
            </section>

            <section class="home-content__rooms">
                <h2 class="home-content__rooms__title title-section">ROOMS</h2>
                <h3 class="home-content__rooms__subtitle subtitle-section">Hand Picked Rooms</h3>
                <div class="home-content__rooms__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>
                <div class="swiper slider-type1">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="./img/slide1.jpg" alt="slide1">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/slide2.jpg" alt="slide2">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/slide3.jpg" alt="slide3">
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                </div>

                <div class="home-content__rooms__room-info">
                    <h4 class="home-content__rooms__room-info__title title-content">Minimal Duplex Room</h4>
                    <p class="home-content__rooms__room-info__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <p class="home-content__rooms__room-info__price paragraph paragraph--price">$345<span>/Night</span></p>
                </div>
            </section>

            <section class="home-content__video">

                <h2 class="home-content__video__title title-section title-section--yellow">INTRO VIDEO</h2>
                <h3 class="home-content__video__subtitle subtitle-section subtitle-section--white">Meet With Our Luxury Place.</h3>
                <p class="home-content__video__text paragraph paragraph--gray2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
                <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25" width="95%" height="280px" frameborder="0"></iframe>
                <button class="home-content__video__button button">BOOK NOW</button>
            </section>

            <section class="home-content__facilities">

                <h2 class="home-content__facilities__title title-section">FACILITIES</h2>
                <h3 class="home-content__facilities__subtitle subtitle-section">Core Features</h3>
                <div class="swiper slider-type2">

                    <div class="swiper-wrapper swiper-wrapper--size-change">

                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature1.svg" alt="iconFeature1">
                                </div>
                                <span class="swiper-slide__icons__number">01</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Have High Rating</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature2.svg" alt="iconFeature2">
                                </div>
                                <span class="swiper-slide__icons__number">02</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Quiet Hours</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature3.svg" alt="iconFeature3">
                                </div>
                                <span class="swiper-slide__icons__number">03</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Best Locations</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature4.svg" alt="iconFeature4">
                                </div>
                                <span class="swiper-slide__icons__number">04</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Free Cancellation</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature5.svg" alt="iconFeature5">
                                </div>
                                <span class="swiper-slide__icons__number">05</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Payment Options</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__icons">
                                <div class="swiper-slide__icons__icon">
                                    <img src="./img/iconFeature6.svg" alt="iconFeature6">
                                </div>
                                <span class="swiper-slide__icons__number">06</span>
                            </div>
                            <h4 class="swiper-slide__title title-content">Special Offers</h4>
                            <p class="swiper-slide__text paragraph paragraph--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            <section class="home-content__data">

                <div class="home-content__data__projects">
                    <img src="./img/projectIcon.svg" alt="projectIcon">
                    <h3 class="home-content__data__projects__number">84k<span>+</span></h3>
                    <p class="home-content__data__projects__text paragraph paragraph--gray3">Projects are Completed</p>
                </div>

                <div class="home-content__data__backers">
                    <img src="./img/backersIcon.svg" alt="backersIcon">
                    <h3 class="home-content__data__projects__number">10M<span>+</span></h3>
                    <p class="home-content__data__projects__text paragraph paragraph--gray3">Active Backers Around World</p>
                </div>

                <div class="home-content__data__categories">
                    <img src="./img/categoriesIcon.svg" alt="categoriesIcon">
                    <h3 class="home-content__data__projects__number">02K<span>+</span></h3>
                    <p class="home-content__data__projects__text paragraph paragraph--gray3">Categories Served</p>
                </div>

                <div class="home-content__data__ideas">
                    <img src="./img/ideasIcon.svg" alt="ideasIcon">
                    <h3 class="home-content__data__projects__number">100M<span>+</span></h3>
                    <p class="home-content__data__projects__text paragraph paragraph--gray3">Idea Raised Funds</p>
                </div>


            </section>
        </div>

        
        <?php 

            include 'footer.php'
        
        ?>


        
    </body>
</html>