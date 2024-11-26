<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - abir_printers</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/styles/body_style.css">
    <link rel="stylesheet" href="assets/styles/home.css">
    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Scripts (External) -->
    <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <!-- Cover Section -->
    <div class="cover">
        <video autoplay loop muted playsinline class="cover-video">
            <source type="video/mp4">
        </video>

        <div class="container search-container">
            <div class="tag-line-content">
                <h1>Where Every <span>Print</span> Tells Your <span>Story</span></h1>
            </div>

            <form action="https://www.google.com/search" class="search" id="search-bar">
                <input type="search" placeholder="Search" name="q" class="search__input">
                <div class="search__button" id="search-button">
                    <i class="ri-search-line search__icon"></i>
                    <i class="ri-close-line search__close"></i>
                </div>
            </form>
        </div>
    </div>

    <!-- Off-Screen Menu -->
    <div class="off-screen-menu" id="off-screen-menu">
        <div class="nav">
            <button class="close-button" id="close-button">Close</button>
            <img data-cursor-text="Welcome" data-cursor-stick class="logo" src="assets/images/logo.png" alt="abir_printers">
        </div>
        <div class="menu-contents">
            <ul id="menu-list"></ul>
        </div>
    </div>

    <!-- Preloader -->
    <div class="center" id="preloader">
        <div class="ring"></div>
        <span>Loading...</span>
    </div>

    <!-- Navigation -->
    <div class="nav">
        <button class="menu-button" id="menu-button">Menu</button>
        <img data-cursor-text="Welcome" data-cursor-stick class="logo" src="assets/images/logo.png" alt="abir_printers">
    </div>

    <!-- About Section -->
    <div class="container short_content_about">
        <div class="content">
            <h2>About Us</h2>
            <p>
                At <span>Abir Printers</span>, innovation and craftsmanship are at the heart of everything we do. We are dedicated to delivering excellence, continually evolving our printing solutions with cutting-edge technology.
                Our passionate team pushes the limits to provide quality prints that leave lasting impressions and help shape a brighter, more creative future.
            </p>
            <button class="read_more_btn">More About Us</button>
        </div>
        <img class="printing_image" src="assets/images/about.jpg" alt="abir_printers">
    </div>

    <!-- Partners Scroller -->
    <div class="scroller" data-speed="fast">
        <h2>Our Partners</h2>
        <div class="scroller__inner" id="partner-list">
            <?php include 'fetch_partners_img.php'; ?> 
        </div>
        
        <div class="scroller__inner" id="partner-list"></div>
    </div>

    <button class="explore_btn">Explore Our Business</button>

    <!-- Future Planning Section -->
    <div class="container future-planning">
        <div class="future_of_abir_printers">
            <div class="images_of_planning">
                <img src="assets/images/1.jpg" alt="1">
                <img src="assets/images/2.jpg" alt="2">
                <img src="assets/images/3.jpg" alt="3">
                <img src="assets/images/future.jpg" alt="future">
            </div>
            <div class="stories_of_planning">
                <h2>Vision</h2>
                <p>
                    In a world where ideas are constantly evolving and businesses seek to make their mark, Abir Printers has stood the test of time by continually adapting to change and embracing the future of printing technology.
                    Founded in the heart of the city, Abir Printers began as a small family-run printing press, focused on delivering high-quality prints to local businesses, authors, and students.
                    But as time passed, the vision for the company grew larger, driven by a passion to redefine what printing could achieve.
                </p>
            </div>
        </div>
        <button class="future-btn">Our Vision</button>
    </div>

    <!-- Gallery Section -->
    <div class="our_gallery">
        <h2>Gallery</h2>
        <div class="swipe">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="assets/images/1.JPG" alt="Image 1"></div>
                    <div class="swiper-slide"><img src="assets/images/2.JPG" alt="Image 2"></div>
                    <div class="swiper-slide"><img src="assets/images/3.JPG" alt="Image 3"></div>
                    <div class="swiper-slide"><img src="assets/images/4.JPG" alt="Image 4"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="section-p1" id="footer"></footer>

    <!-- Scripts (Internal) -->
    <script src="assets/js/preloader.js" defer></script>
    <script src="assets/js/video-cover.js" defer></script>
    <script src="assets/js/menu-items-fetch.js" defer></script>
    <script src="assets/js/menu-toggle.js" defer></script>
    <script src="assets/js/search-bar.js" defer></script>
    <script src="assets/js/fade-up_text.js" defer></script>
    <script src="assets/js/partner-img-fetch.js" defer></script>
    <script src="assets/js/img-slide-show.js" defer></script>
    <script src="assets/js/fade_up_futureplan.js" defer></script>
    <script src="assets/js/swiper.js" defer></script>
    <script src="assets/js/footer-contents.js" defer></script>

    <script>
        const cursor = new MouseFollower({
            container: document.body,
            speed: 0.3
        });
    </script>
</body>

</html>