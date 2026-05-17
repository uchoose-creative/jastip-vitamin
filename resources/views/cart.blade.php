<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Your Cart</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/cart.css') }}">

</head>

<body>

<div class="cart-page">

    <!-- NAVBAR -->
    <nav class="cart-navbar">

        <h1 class="logo">
            Jastip Vitamin
        </h1>

        <a href="/catalog"
           class="back-btn">

            Back Shopping

        </a>

    </nav>

    <!-- CONTENT -->
    <div class="cart-container">

        <!-- LEFT -->
        <div class="cart-items">

            <div class="cart-header">

                <h1>
                    Shopping Cart
                </h1>

                <span id="cart-count">

                    {{ $carts->count() }} Items

                </span>

            </div>

            @php
                $subtotal = 0;
                $shipping = $carts->count() > 0 ? 20000 : 0;
            @endphp

            @foreach($carts as $cart)

                @php
                    $subtotal += $cart->product->price * $cart->quantity;
                @endphp

                <div class="cart-card"
                     id="cart-row-{{ $cart->id }}">

                    <!-- IMAGE -->
                    <div class="cart-image">

                        <img src="{{ asset('products/' . $cart->product->image) }}">

                    </div>

                    <!-- INFO -->
                    <div class="cart-info">

                        <h2>
                            {{ $cart->product->name }}
                        </h2>

                        <p>
                            {{ $cart->product->description }}
                        </p>

                        <span class="stock">
                            Stock Available
                        </span>

                    </div>

                    <!-- PRICE -->
                    <div class="cart-price">

                        <h3>

                            Rp{{ number_format($cart->product->price,0,',','.') }}

                        </h3>

                        <!-- QTY -->
                        <div class="qty-box">

                            <!-- MINUS -->
                            <button type="button"
                                    class="qty-btn"
                                    onclick="updateQty({{ $cart->id }}, 'decrease')">

                                -

                            </button>

                            <!-- NUMBER -->
                            <div class="qty-number"
                                 id="qty-{{ $cart->id }}">

                                {{ $cart->quantity }}

                            </div>

                            <!-- PLUS -->
                            <button type="button"
                                    class="qty-btn"
                                    onclick="updateQty({{ $cart->id }}, 'increase')">

                                +

                            </button>

                        </div>

                        <!-- DELETE -->
                        <button class="delete-cart-btn"
                                onclick="deleteCart({{ $cart->id }})">

                            Remove

                        </button>

                    </div>

                </div>

            @endforeach

        </div>

        <!-- RIGHT -->
        <div class="summary-box">

            <h2>
                Order Summary
            </h2>

            <!-- SUBTOTAL -->
            <div class="summary-item">

                <span>
                    Subtotal
                </span>

                <span id="subtotal">

                    Rp{{ number_format($subtotal,0,',','.') }}

                </span>

            </div>

            <!-- SHIPPING -->
            <div class="summary-item">

                <span>
                    Shipping
                </span>

                <span>

                    Rp{{ number_format($shipping,0,',','.') }}

                </span>

            </div>

            <!-- TOTAL -->
            <div class="summary-total">

                <span>
                    Total
                </span>

                <span id="total">

                    Rp{{ number_format($subtotal + $shipping,0,',','.') }}

                </span>

            </div>

            <!-- BUTTON -->
            <button class="checkout-btn">

                Checkout Now

            </button>

        </div>

    </div>

</div>

<script>

function formatRupiah(number)
{
    return 'Rp' + number.toLocaleString('id-ID');
}

function updateQty(id, action)
{

    fetch(`/cart/${action}/${id}`, {

        method: 'POST',

        headers: {

            'X-CSRF-TOKEN': '{{ csrf_token() }}',

            'Accept': 'application/json'

        }

    })

    .then(response => response.json())

    .then(data => {

        document.getElementById(`qty-${id}`).innerText =
            data.quantity;

        document.getElementById('subtotal').innerText =
            formatRupiah(data.subtotal);

        document.getElementById('total').innerText =
            formatRupiah(data.total);

        document.getElementById('cart-count').innerText =
            data.count + ' Items';

    });

}

function deleteCart(id)
{

    fetch(`/cart/delete/${id}`, {

        method: 'POST',

        headers: {

            'X-CSRF-TOKEN': '{{ csrf_token() }}',

            'Accept': 'application/json'

        }

    })

    .then(response => response.json())

    .then(data => {

        document.getElementById(`cart-row-${id}`).remove();

        location.reload();

    });

}

</script>

</body>
</html>