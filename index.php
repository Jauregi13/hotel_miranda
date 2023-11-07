<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script defer src="./js/slider.js"></script>
        <title>Home</title>
    </head>
    <body>
        <?php 
            include 'header.php'
        ?>

        <div class="home-content">

            <section class="home-content__banner-home">

                <div class="home-content__banner-home__content">

                    <p class="home-content__banner-home__content__text">THE ULTIMATE LUXURY EXPERIENCE</p>
                    <h1 class="home-content__banner-home__content__title">The Perfect Base For You</h1>

                    <div class="home-content__banner-home__content__buttons">

                        <button class="home-content__banner-home__content__buttons__tour">TAKE A TOUR</button>
                        <button class="home-content__banner-home__content__buttons__learn">LEARN MORE</button>

                    </div>
                </div>
            </section>

            <section class="home-content__booking-calendar">

                <form class="home-content__booking-calendar__form">

                    <label for="arrival">Arrival Date</label>
                    <input type="date" name="arrival">

                    <label for="departure">LeDeparture Date</label>
                    <input type="date" name="departure">

                    <input type="submit" value="CHECK AVAILABILITY" name="check"/>


                </form>
            </section>

            <section class="home-content__about-us">
                <div class="home-content__about-us__info">
                    <h2>ABOUT US</h2>
                    <h3>Discover Our Underground.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button>BOOK NOW</button>
                </div>
                
                <div class="home-content__about-us__extra-info">

                    <div class="home-content__about-us__extra-info__team">
                        <div class="home-content__about-us__extra-info__team__image"></div>
                        <div class="home-content__about-us__extra-info__team__icons">
                            <img src='./img/teamIcon1.svg' alt="teamIcon1" />
                            <img src="./img/teamIcon2.svg" alt="teamIcon2" class="home-content__about-us__extra-info__team__icons__icon2"/>
                        </div>
                        <h4>Strong Team</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="home-content__about-us__extra-info__luxury">

                        <div class="home-content__about-us__extra-info__luxury__image"></div>
                        <div class="home-content__about-us__extra-info__luxury__room">
                            <img src="./img/luxuryRoomIcon.svg" alt="luxury Room">
                            <h4 class="home-content__about-us__extra-info__luxury__room__title">Luxury Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                </div>
                
            </section>

            <section class="home-content__rooms">
                <h2>ROOMS</h2>
                <h3>Hand Picked Rooms</h3>
                <div class="home-content__rooms__icons">
                    <i class="fa-solid fa-bed"></i>
                    <i class="fa-solid fa-wifi"></i>
                    <i class="fa-solid fa-car"></i>
                    <i class="fa-regular fa-snowflake"></i>
                    <i class="fa-solid fa-dumbbell"></i>
                    <i class="fa-solid fa-ban-smoking"></i>
                    <i class="fa-solid fa-martini-glass-citrus"></i>
                </div>
                <div class="swiper">
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
                    <h4>Minimal Duplex Room</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <p class="home-content__rooms__room-info__price">$345<span>/Night</span></p>
                </div>
            </section>

            <section class="home-content__video">

                <h2>INTRO VIDEO</h2>
                <h3>Meet With Our Luxury Place.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
                <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25" width="95%" height="280px" frameborder="0"></iframe>
                <button>BOOK NOW</button>
            </section>
        </div>

        


        
    </body>
</html>