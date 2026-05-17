<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

    <!-- SIDEBAR -->
    <body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h1 class="logo">
            Admin Panel
        </h1>

        <div class="menu">

            <a href="{{ url('/admin/dashboard') }}" class="active">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>

            <a href="{{ url('/admin/products') }}">
                <i class="fa-solid fa-box"></i>
                Products
            </a>

            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                Orders
            </a>

            <a href="#">
                <i class="fa-solid fa-users"></i>
                Users
            </a>

            <form action="{{ url('/logout') }}" method="POST">

                @csrf

                <button type="submit" class="logout-btn">

                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout

                </button>

            </form>

        </div>

    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <h1>
                Dashboard
            </h1>

            <div class="admin-box">

                <span>
                    Hi, {{ Auth::user()->name }}
                </span>

                <img src="https://i.pravatar.cc/150?img=12">

            </div>

        </div>

        <!-- CARDS -->
        <div class="cards">

            <div class="card"> {{ $totalProducts }}

                <p>Total Products</p>

            </div>

            <div class="card">

                {{ $totalOrders }}
                <p>Total Orders</p>

            </div>

            <div class="card">

                {{ $totalUsers }}
                <p>Total Users</p>

            </div>

            <div class="card">

                Rp{{ number_format($totalRevenue,0,',','.') }}

                <p>Total Revenue</p>

            </div>

        </div>

    </div>
<script>

setInterval(() => {

    location.reload();

}, 10000);

</script>

</body>

</html>