<!DOCTYPE html>
@php
    use App\Models\Product;
@endphp
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
            <a href="#choose">Choose</a>
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
     <a href="#choose">Choose</a>
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

            <a href="{{ url('/login') }}" class="shop-link">

                <button class="shop-btn">
                    Shop Now
                </button>

            </a>
        </div>

        </div>

        <div class="hero-image">

            <img src="https://images.unsplash.com/photo-1584017911766-d451b3d0e843?q=80&w=1000&auto=format&fit=crop">

        </div>

    </section>


    <!-- ========================= WHY CHOOSE US ========================= -->

<section class="category-section" id="choose">

    <div class="section-title">

        <h1>
            Why Choose Us?
        </h1>

        <p>
            Trusted iHerb jastip service with original products and fast delivery.
        </p>

    </div>

    <div class="category-grid">

        <!-- CARD 1 -->
        <div class="category-card">

            <img src="https://images.unsplash.com/photo-1584017911766-d451b3d0e843?q=80&w=1200&auto=format&fit=crop">

            <div class="category-content">

                <h3>
                    100% Original
                </h3>

                <p>
                    Guaranteed authentic products directly from iHerb.
                </p>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="category-card">

            <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?q=80&w=1200&auto=format&fit=crop">

            <div class="category-content">

                <h3>
                    Direct From USA
                </h3>

                <p>
                    Imported directly from trusted iHerb suppliers.
                </p>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="category-card">

            <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop">

            <div class="category-content">

                <h3>
                    Fast Delivery
                </h3>

                <p>
                    Fast and secure shipping to all Indonesia regions.
                </p>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="category-card">

            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1200&auto=format&fit=crop">

            <div class="category-content">

                <h3>
                    Affordable Price
                </h3>

                <p>
                    Competitive jastip fees with the best value.
                </p>

            </div>

        </div>

    </div>

</section>

    <!-- ========================= PRODUCTS ========================= -->

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

    @foreach($products as $product)

    <div class="product-card">

        <div class="product-image">

            <img src="{{ asset('products/' . $product->image) }}">

        </div>

        <div class="product-content">

            <h3>
                {{ $product->name }}
            </h3>

            @if($product->status == 'in_stock')

                <div class="stock-badge in-stock">
                    In Stock
                </div>

            @elseif($product->status == 'pre_order')

                <div class="stock-badge pre-order">
                    Pre Order
                </div>  

            @else

            <div class="stock-badge out-stock">
                    Out of Stock
            </div>

            @endif


            <p>
                {{ $product->description }}
            </p>

            <div class="product-bottom">

                <span class="product-price">

                    Rp{{ number_format($product->price, 0, ',', '.') }}

                </span>

                @auth

                    <a href="{{ url('/cart') }}">

                        <button class="buy-btn">
                            Add to Cart
                        </button>

                    </a>

                @else

                    <a href="{{ url('/login') }}">

                        <button class="buy-btn">
                            Login First
                        </button>

                    </a>

                @endauth

            </div>

        </div>

    </div>

    @endforeach

</div>
    <!-- ========================= CONTACT ========================= -->

    <section class="contact-section" id="contact">

    <div class="contact-container">

        <!-- LEFT -->
        <div class="contact-left">

            <span class="contact-tag">
                Contact Us
            </span>

            <h1>
                Let’s Talk About
                Your Health Needs
            </h1>

            <p>
                Have questions about vitamins or supplements?
                Our team is ready to help you anytime.
            </p>

        </div>

        <!-- RIGHT -->
        <div class="contact-right">

            <form class="contact-form">

                <input type="text" placeholder="Your Name">

                <input type="email" placeholder="Your Email">

                <textarea placeholder="Your Message"></textarea>

                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>

    <!-- ========================= FOOTER ========================= -->

<footer>

    <h1>
        Jastip Vitamin
    </h1>

    <p>
        Trusted iHerb Jastip Service for Healthy Lifestyle.
    </p>

    <span class="footer-credit">

        Bringing premium supplements closer to you

    </span>

</footer>

    <!-- JS -->
   <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>