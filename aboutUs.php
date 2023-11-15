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
                <h3 class="about-content__video-content__text">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
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
                <button class="about-content__restaurant__button">TAKE A TOUR</button>
            </section>
        </div>
    
    </body>

</html>