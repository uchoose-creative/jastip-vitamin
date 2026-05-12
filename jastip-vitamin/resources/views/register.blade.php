<!-- =========================================================
FILE : register.html
PROJECT : JASTIP VITAMIN
========================================================= -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Jastip Vitamin</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
    href="{{ asset('css/auth.css') }}">

</head>

<body>

    <!-- =========================
    CONTAINER
    ========================= -->

    <div class="container">

        <!-- LEFT -->
        <div class="left-side">

            <div class="overlay"></div>

            <div class="left-content">

                <h1>
                    Join With Us ✨
                </h1>

                <p>
                    Create your account and start your healthy
                    lifestyle with premium vitamins.
                </p>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="right-side">

            <div class="form-box">

               <a href="{{ url('/') }}" class="back-home">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Home
                </a>

                <h1>
                    Create Account
                </h1>

                <p class="subtitle">
                    Register your new account
                </p>

                <!-- FORM -->
                <form method="POST">

                    <!-- NAME -->
                    <div class="input-group">

                        <label>Full Name</label>

                        <div class="input-box">

                            <i class="fa-solid fa-user"></i>

                            <input type="text"
                                placeholder="Enter your name">

                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div class="input-group">

                        <label>Email</label>

                        <div class="input-box">

                            <i class="fa-solid fa-envelope"></i>

                            <input type="email"
                            name="email"
                            placeholder="Enter your email">

                        </div>

                    </div>

                    <!-- PASSWORD -->
                    <div class="input-group">

                        <label>Password</label>

                        <div class="input-box">

                            <i class="fa-solid fa-lock"></i>

                            <input type="password"
                            name="password"
                            placeholder="Create password">

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <button type="submit" class="login-btn">
                        Register
                    </button>

                </form>

                <!-- DIVIDER -->
                <div class="divider">
                    OR
                </div>

                <!-- GOOGLE -->
                <button class="google-btn">

                    <i class="fa-brands fa-google"></i>

                    Register with Google

                </button>

                <!-- LOGIN -->
                <p class="register-text">

                    Already have an account?

                    <a href="login.html">
                        Login
                    </a>

                </p>

            </div>

        </div>

    </div>

</body>

</html>