@php
    use Illuminate\Support\Facades\Auth;
@endphp

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

    <!-- =========================NAVBAR========================= -->

   <nav class="catalog-navbar">

    <h1 class="catalog-logo">
        Jastip Vitamin
    </h1>

    <div class="navbar-right">

        <!-- DESKTOP ONLY -->
        <div class="nav-icons desktop-nav">

            <i class="fa-solid fa-heart"></i>

            <a href="{{ url('/cart') }}"
               class="cart-icon">

                <i class="fa-solid fa-cart-shopping"></i>

            </a>

            <span class="user-name">

               {{ Auth::user()->name ?? 'Guest' }}

            </span>

            <a href="/profile">

                @if(Auth::user()->avatar)

                    <img src="{{ asset('avatars/' . Auth::user()->avatar) }}">

                @else

                    <img src="https://i.pravatar.cc/150?img=12">

                @endif

            </a>

        </div>

        <!-- LOGOUT -->
        <form action="/logout"
              method="POST">

            @csrf

            <button type="submit"
                    class="logout-btn">

                Logout

            </button>

        </form>

    </div>

</nav>

    <!-- ========================= HEADER ========================= -->

    <section class="catalog-header">

        <div class="catalog-header-text">

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

    <!-- =========================
SEARCH
========================= -->

<section class="catalog-search-section">

    <form action="/catalog"
          method="GET"
          class="catalog-search-box">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input type="text"
               name="search"
               placeholder="Search vitamins..."
               value="{{ request('search') }}">

        <button type="submit"
                class="catalog-search-btn">

            Search

        </button>

    </form>

</section>

    <!-- =========================
    CATEGORY
    ========================= -->

   <section class="category-section">

    <a href="{{ url('/catalog') }}"
       class="category active">

        All

    </a>

</section>


    <!-- =========================
    PRODUCTS
    ========================= -->

    <section class="products">

        <div class="catalog-product-grid">

    @foreach($products as $product)

    <div class="catalog-product-card">

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

                <form action="/add-to-cart/{{ $product->id }}"
                    method="POST">

                    @csrf

                    <button class="buy-btn">

                        Add to Cart

                    </button>

                </form>

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
    </section>

<div class="mobile-bottom-nav">

    <a href="/catalog">

        <i class="fa-solid fa-house"></i>

    </a>

    <a href="#">

        <i class="fa-solid fa-heart"></i>

    </a>

    <a href="/cart">

        <i class="fa-solid fa-cart-shopping"></i>

    </a>

    <a href="/profile">

        @if(Auth::user()->avatar)

            <img src="{{ asset('avatars/' . Auth::user()->avatar) }}"
                 class="bottom-profile-img">

        @else

            <img src="https://i.pravatar.cc/150?img=12"
                 class="bottom-profile-img">

        @endif

    </a>

</div>

</body>
</html>