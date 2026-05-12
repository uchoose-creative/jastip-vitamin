<!-- =========================================================
FILE : index.html
PROJECT : JASTIP VITAMIN
========================================================= -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jastip Vitamin</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
    href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- =========================
    NAVBAR
    ========================= -->

   <nav class="navbar">

    <!-- LOGO -->
    <h1 class="logo">
        Jastip Vitamin
    </h1>

    <!-- RIGHT -->
    <div class="nav-right">

        <!-- MENU DESKTOP -->
        <div class="menu desktop-menu">

            <a href="#home">Home</a>
            <a href="#category">Category</a>
            <a href="#products">Products</a>
            <a href="#contact">Contact</a>

        </div>

        <!-- HAMBURGER -->
        <div class="menu-toggle" id="menu-toggle">

            <span></span>
            <span></span>
            <span></span>

        </div>

    </div>

</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobile-menu">

    <a href="#home">Home</a>
    <a href="#category">Category</a>
    <a href="#products">Products</a>
    <a href="#contact">Contact</a>

</div>

    <!-- =========================
    HERO
    ========================= -->

    <section class="hero" id="home">

        <div class="hero-text">

            <p class="hero-subtitle">
                Healthy & Premium Supplements
            </p>

            <h1>
                Find The Best <br>
                Vitamins For <br>
                Your Health
            </h1>

            <p class="hero-desc">
                Discover premium vitamins and supplements
                with trusted quality and affordable prices.
            </p>

            <div class="hero-buttons">

            <a href="/login" class="shop-link">

            <button class="shop-btn">
                Shop Now
            </button>

            </a>

            <a href="#products" class="explore-link">

                <button class="explore-btn">
                    Explore
                </button>

            </a>

        </div>

        </div>

        <div class="hero-image">

            <img src="https://images.unsplash.com/photo-1584017911766-d451b3d0e843?q=80&w=1000&auto=format&fit=crop">

        </div>

    </section>

    <!-- =========================
    SEARCH
    ========================= -->

    <section class="search-section">

        <div class="search-box">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input type="text" placeholder="Search vitamins...">

            <button class="search-btn">
                Search
            </button>

        </div>

    </section>

    <!-- =========================
    CATEGORY
    ========================= -->

    <section class="category-section" id="category">

        <div class="section-header">

            <h1 class="section-title">
                Shop By Category
            </h1>

            <p class="section-desc">
                Find your favorite vitamins and supplements easily.
            </p>

        </div>

        <div class="category-grid">

            <!-- CATEGORY -->
            <div class="category-card">

                <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?q=80&w=1000&auto=format&fit=crop">

                <div class="category-content">

                    <h3>Vitamin</h3>
                    <p>Daily essential vitamins.</p>

                </div>

            </div>

            <!-- CATEGORY -->
            <div class="category-card">

                <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?q=80&w=1000&auto=format&fit=crop">

                <div class="category-content">

                    <h3>Beauty</h3>
                    <p>Healthy skin & glowing body.</p>

                </div>

            </div>

            <!-- CATEGORY -->
            <div class="category-card">

                <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?q=80&w=1000&auto=format&fit=crop">

                <div class="category-content">

                    <h3>Immune</h3>
                    <p>Boost your immune system.</p>

                </div>

            </div>

            <!-- CATEGORY -->
            <div class="category-card">

                <img src="https://images.unsplash.com/photo-1514996937319-344454492b37?q=80&w=1000&auto=format&fit=crop">

                <div class="category-content">

                    <h3>Fitness</h3>
                    <p>Support your active lifestyle.</p>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
    PRODUCTS
    ========================= -->

    <section class="products" id="products">

        <div class="section-header">

            <h1 class="section-title">
                Popular Products
            </h1>

            <p class="section-desc">
                Premium supplements with trusted quality.
            </p>

        </div>

        <div class="product-grid">

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Vitamin C</h3>

                    <p>
                        Helps boost immunity and maintain healthy body.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp120K
                        </span>

                           
                        <a href="/login" class="buy-link">

                            <button class="buy-btn">
                                Buy
                            </button>

                        </a>

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Fish Oil</h3>

                    <p>
                        Good for brain, heart, and blood circulation.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp150K
                        </span>

                        
                        <a href="/login" class="buy-link">

                            <button class="buy-btn">
                                Buy
                            </button>

                        </a>

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Collagen</h3>

                    <p>
                        Supports healthy skin and beauty naturally.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp175K
                        </span>

                       
                            <a href="/login" class="buy-link">

                                <button class="buy-btn">
                                    Buy
                                </button>

                            </a>

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1514996937319-344454492b37?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Protein</h3>

                    <p>
                        Perfect for workout and muscle recovery.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp210K
                        </span>

                       
                        <a href="/login" class="buy-link">

                            <button class="buy-btn">
                                Buy
                            </button>

                        </a>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
    CONTACT
    ========================= -->

    <section class="contact-section" id="contact">

        <div class="contact-container">

            <!-- LEFT -->
            <div class="contact-text">

                <p class="contact-subtitle">
                    Contact Us
                </p>

                <h1>
                    Let's Talk About <br>
                    Your Health Needs
                </h1>

                <p>
                    Have questions about vitamins or supplements?
                    Our team is ready to help you anytime.
                </p>

                <div class="contact-info">

                    <div class="info-box">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Bandung, Indonesia</span>
                    </div>

                    <div class="info-box">
                        <i class="fa-solid fa-phone"></i>
                        <span>+62 812 3456 7890</span>
                    </div>

                    <div class="info-box">
                        <i class="fa-solid fa-envelope"></i>
                        <span>jastipvitamin@gmail.com</span>
                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <form class="contact-form">

                <input type="text" placeholder="Your Name">

                <input type="email" placeholder="Your Email">

                <textarea placeholder="Your Message"></textarea>

                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </section>

    <!-- =========================
    FOOTER
    ========================= -->

    <footer>

        <h1>
            Jastip Vitamin
        </h1>

        <p>
            Premium vitamins and supplements for healthy lifestyle.
        </p>

    </footer>

    <!-- JS -->
   <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>