<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Home</title>
    </head>
    <body>
        <?php 
            include 'header.php'
        ?>

        <div class="home-content">

            <div class="home-content__banner-home">

                <div class="home-content__banner-home__content">

                    <p class="home-content__banner-home__content__text">THE ULTIMATE LUXURY EXPERIENCE</p>
                    <h1 class="home-content__banner-home__content__title">The Perfect Base For You</h1>

                    <div class="home-content__banner-home__content__buttons">

                        <button class="home-content__banner-home__content__buttons__tour">TAKE A TOUR</button>
                        <button class="home-content__banner-home__content__buttons__learn">LEARN MORE</button>

                    </div>
                </div>
            </div>

            <div class="home-content__booking-calendar">

                <form class="home-content__booking-calendar__form">

                    <label for="arrival">Arrival Date</label>
                    <input type="date" name="arrival">

                    <label for="departure">LeDeparture Date</label>
                    <input type="date" name="departure">

                    <input type="submit" value="CHECK AVAILABILITY" name="check"/>


                </form>
            </div>

            <div class="home-content__about-us">
                <div class="home-content__about-us__info">
                    <h1>ABOUT US</h1>
                    <h2>Discover Our Underground.</h2>
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
                        <h1>Strong Team</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="home-content__about-us__extra-info__luxury">

                        <div class="home-content__about-us__extra-info__luxury__image"></div>
                        <div class="home-content__about-us__extra-info__luxury__room">
                            <img src="./img/luxuryRoomIcon.svg" alt="luxury Room">
                            <h1>Luxury Room</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

        


        
    </body>
</html>