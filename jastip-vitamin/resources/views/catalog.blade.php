<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalog | Jastip Vitamin</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
    href="{{ asset('css/catalog.css') }}">
</head>

<body>

    <!-- =========================
    NAVBAR
    ========================= -->

    <nav class="navbar">

        <h1 class="logo">
            Jastip Vitamin
        </h1>

        <div class="nav-icons">

            <i class="fa-solid fa-heart"></i>

            <i class="fa-solid fa-cart-shopping"></i>

            <img src="https://i.pravatar.cc/150?img=12">

        </div>

    </nav>

    <!-- =========================
    HEADER
    ========================= -->

    <section class="header">

        <div class="header-text">

            <h1>
                Find Your <br>
                Favorite Vitamins
            </h1>

            <p>
                Premium supplements for your healthy lifestyle.
            </p>

        </div>

    </section>

    <!-- =========================
    SEARCH
    ========================= -->

    <section class="search-section">

        <div class="search-box">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input type="text"
                placeholder="Search vitamins...">

        </div>

    </section>

    <!-- =========================
    CATEGORY
    ========================= -->

    <section class="category-section">

        <button class="category active">
            All
        </button>

        <button class="category">
            Vitamin
        </button>

        <button class="category">
            Immune
        </button>

        <button class="category">
            Beauty
        </button>

        <button class="category">
            Fitness
        </button>

    </section>

    <!-- =========================
    PRODUCTS
    ========================= -->

    <section class="products">

        <div class="product-grid">

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Vitamin C</h3>

                    <p>
                        Boost immunity and maintain body health.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp120K
                        </span>

                        <button class="buy-btn">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Fish Oil</h3>

                    <p>
                        Good for heart and blood circulation.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp150K
                        </span>

                        <button class="buy-btn">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?q=80&w=1000&auto=format&fit=crop">

                <div class="card-content">

                    <h3>Collagen</h3>

                    <p>
                        Healthy skin and beauty support.
                    </p>

                    <div class="card-bottom">

                        <span class="price">
                            Rp175K
                        </span>

                        <button class="buy-btn">
                            Buy
                        </button>

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

                        <button class="buy-btn">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>