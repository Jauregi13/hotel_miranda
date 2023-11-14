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
        </div>
    
    </body>

</html>