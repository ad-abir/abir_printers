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
        <?php include 'fetch_video_cover.php'; ?> <!-- Include the PHP file to fetch video metadata -->

        <video autoplay loop muted playsinline class="cover-video">
            <?php if (!empty($video_src) && !empty($video_type)): ?>
                <source src="<?php echo $video_src; ?>" type="<?php echo $video_type; ?>">
            <?php else: ?>
                <p>Video not available.</p>
            <?php endif; ?>
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
    <?php include 'fetch_aboutus_home.php'; ?> <!-- Include the PHP file to fetch data -->

    <div class="container short_content_about">
        <div class="content">
            <h2><?php echo $title; ?></h2> <!-- Display the title -->
            <p>
                <?php echo $content; ?> <!-- Display the content -->
            </p>
            <button class="read_more_btn">More About Us</button>
        </div>
        <img class="printing_image" src="<?php echo $image_path; ?>" alt="abir_printers"> <!-- Display the image -->
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
    <?php include 'fetch_vision_home.php'; ?>

    <div class="container future-planning">
        <div class="future_of_abir_printers">
            <div class="images_of_planning">
                <?php foreach ($image_paths as $image): ?>
                    <img src="<?php echo $image; ?>" alt="Future Planning Image">
                <?php endforeach; ?>
            </div>
            <div class="stories_of_planning">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $content; ?></p>
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
                    <?php include 'fetch_gallery_img.php'; ?>
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