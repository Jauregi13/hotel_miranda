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
            $title = 'Our Offers';
            $pageName = 'Offers';
            include 'breadcrumb.php';
        ?>

        <section class="offers-content">
            
            <div class="offers-content__room">
                <div class="offers-content__room__image-offer">
                    <img src="./img/hotel-room.jpg" alt="hotel room" class="offers-content__room__image-offer__image">
                    <div class="offers-content__room__image-offer__prices">
                        <p class="offers-content__room__image-offer__prices__price paragraph paragraph--price paragraph--price--medium">$500/Night</p>
                        <p class="offers-content__room__image-offer__prices__offer paragraph paragraph--price paragraph--price--offer">$345/Night</p>
                    </div>
                </div>

                <div class="offers-content__room__content">
                    <h2 class="offers-content__room__content__title title-section">DOUBLE BED</h2>
                    <h3 class="offers-content__room__content__subtitle subtitle-section subtitle-section--medium">Luxury Double Bed</h3>
                    <p class="offers-content__room__content__text paragraph paragraph--gray paragraph--second-typography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <ul class="offers-content__room__content__list-icons">
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/air-conditioner-icon.svg" alt="Air conditioner" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Air conditioner</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/breakfast-icon2.svg" alt="Breakfast" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Breakfast</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/cleaning-icon.svg" alt="Cleaning" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Cleaning</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/grocery-icon.svg" alt="Grocery" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Grocery</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shop-icon.svg" alt="Shop" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shop near</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/wifi-icon.svg" alt="Wifi" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">High speed WiFi</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/kitchen-icon.svg" alt="Kitchen" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Kitchen</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shower-icon.svg" alt="Shower" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shower</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/bed-icon.svg" alt="Bed" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Single bed</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/towels-icon.svg" alt="Towels" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Towels</p>
                        </li>
                       
                    </ul>
                    <button class="button">Book Now</button>
                </div>  
            </div>

            <div class="offers-content__room">
                <div class="offers-content__room__image-offer">
                    <img src="./img/hotel-room.jpg" alt="hotel room" class="offers-content__room__image-offer__image">
                    <div class="offers-content__room__image-offer__prices">
                        <p class="offers-content__room__image-offer__prices__price paragraph paragraph--price paragraph--price--medium">$500/Night</p>
                        <p class="offers-content__room__image-offer__prices__offer paragraph paragraph--price paragraph--price--offer">$345/Night</p>
                    </div>
                </div>

                <div class="offers-content__room__content">
                    <h2 class="offers-content__room__content__title title-section">DOUBLE BED</h2>
                    <h3 class="offers-content__room__content__subtitle subtitle-section subtitle-section--medium">Luxury Double Bed</h3>
                    <p class="offers-content__room__content__text paragraph paragraph--gray paragraph--second-typography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <ul class="offers-content__room__content__list-icons">
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/air-conditioner-icon.svg" alt="Air conditioner" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Air conditioner</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/breakfast-icon2.svg" alt="Breakfast" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Breakfast</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/cleaning-icon.svg" alt="Cleaning" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Cleaning</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/grocery-icon.svg" alt="Grocery" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Grocery</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shop-icon.svg" alt="Shop" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shop near</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/wifi-icon.svg" alt="Wifi" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">High speed WiFi</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/kitchen-icon.svg" alt="Kitchen" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Kitchen</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shower-icon.svg" alt="Shower" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shower</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/bed-icon.svg" alt="Bed" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Single bed</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/towels-icon.svg" alt="Towels" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Towels</p>
                        </li>
                       
                    </ul>
                    <button class="button">Book Now</button>
                </div>  
            </div>

            <div class="offers-content__room">
                <div class="offers-content__room__image-offer">
                    <img src="./img/hotel-room.jpg" alt="hotel room" class="offers-content__room__image-offer__image">
                    <div class="offers-content__room__image-offer__prices">
                        <p class="offers-content__room__image-offer__prices__price paragraph paragraph--price paragraph--price--medium">$500/Night</p>
                        <p class="offers-content__room__image-offer__prices__offer paragraph paragraph--price paragraph--price--offer">$345/Night</p>
                    </div>
                </div>

                <div class="offers-content__room__content">
                    <h2 class="offers-content__room__content__title title-section">DOUBLE BED</h2>
                    <h3 class="offers-content__room__content__subtitle subtitle-section subtitle-section--medium">Luxury Double Bed</h3>
                    <p class="offers-content__room__content__text paragraph paragraph--gray paragraph--second-typography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <ul class="offers-content__room__content__list-icons">
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/air-conditioner-icon.svg" alt="Air conditioner" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Air conditioner</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/breakfast-icon2.svg" alt="Breakfast" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Breakfast</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/cleaning-icon.svg" alt="Cleaning" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Cleaning</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/grocery-icon.svg" alt="Grocery" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Grocery</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shop-icon.svg" alt="Shop" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shop near</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/wifi-icon.svg" alt="Wifi" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">High speed WiFi</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/kitchen-icon.svg" alt="Kitchen" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Kitchen</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shower-icon.svg" alt="Shower" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shower</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/bed-icon.svg" alt="Bed" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Single bed</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/towels-icon.svg" alt="Towels" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Towels</p>
                        </li>
                       
                    </ul>
                    <button class="button">Book Now</button>
                </div>  
            </div>

            <div class="offers-content__room">
                <div class="offers-content__room__image-offer">
                    <img src="./img/hotel-room.jpg" alt="hotel room" class="offers-content__room__image-offer__image">
                    <div class="offers-content__room__image-offer__prices">
                        <p class="offers-content__room__image-offer__prices__price paragraph paragraph--price paragraph--price--medium">$500/Night</p>
                        <p class="offers-content__room__image-offer__prices__offer paragraph paragraph--price paragraph--price--offer">$345/Night</p>
                    </div>
                </div>

                <div class="offers-content__room__content">
                    <h2 class="offers-content__room__content__title title-section">DOUBLE BED</h2>
                    <h3 class="offers-content__room__content__subtitle subtitle-section subtitle-section--medium">Luxury Double Bed</h3>
                    <p class="offers-content__room__content__text paragraph paragraph--gray paragraph--second-typography">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <ul class="offers-content__room__content__list-icons">
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/air-conditioner-icon.svg" alt="Air conditioner" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Air conditioner</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/breakfast-icon2.svg" alt="Breakfast" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Breakfast</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/cleaning-icon.svg" alt="Cleaning" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Cleaning</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/grocery-icon.svg" alt="Grocery" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Grocery</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shop-icon.svg" alt="Shop" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shop near</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/wifi-icon.svg" alt="Wifi" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">High speed WiFi</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/kitchen-icon.svg" alt="Kitchen" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Kitchen</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/shower-icon.svg" alt="Shower" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Shower</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/bed-icon.svg" alt="Bed" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Single bed</p>
                        </li>
                        <li class="offers-content__room__content__list-icons__icon">
                            <img src="./img/towels-icon.svg" alt="Towels" class="offers-content__room__content__list-icons__icon__image">
                            <p class="offers-content__room__content__list-icons__icon__text paragraph paragraph--gray paragraph--bigger paragraph--second-typography">Towels</p>
                        </li>
                       
                    </ul>
                    <button class="button">Book Now</button>
                </div>  
            </div>
        </section>
    
    </body>

</html>