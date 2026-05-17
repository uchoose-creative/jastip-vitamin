<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

          <a href="/catalog"
            class="back-link">

                ← Back to Catalog

            </a>

    <title>
        Profile Settings
    </title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #F3F7F2;
            padding: 50px;
        }

        .profile-box{
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        .profile-box h1{
            font-size: 38px;
            color: #111827;
            margin-bottom: 10px;
        }

        .profile-box p{
            color: #6B7280;
            margin-bottom: 30px;
        }

        .avatar-preview{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .input-group{
            margin-bottom: 25px;
        }

        .input-group label{
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .input-group input{
            width: 100%;
            padding: 14px;
            border-radius: 14px;
            border: 1px solid #E5E7EB;
            outline: none;
        }

        .save-btn{
            background: #22C55E;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .back-link{
    display: inline-block;

    margin-bottom: 25px;

    text-decoration: none;

    color: #22C55E;

    font-weight: 600;

    transition: 0.3s;
}

.back-link:hover{
    opacity: 0.7;
}

    </style>

</head>

<body>

<div class="profile-box">

    <h1>
        Profile Settings
    </h1>

    <p>
        Manage your account information.
    </p>

    @if(Auth::user()->avatar)

    <img src="{{ asset('avatars/' . Auth::user()->avatar) }}"
         class="avatar-preview">

@else

    <img src="https://i.pravatar.cc/150?img=12"
         class="avatar-preview">

@endif

    <form action="/profile/update"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="input-group">

            <label>
                Name
            </label>

            <input type="text"
                   name="name"
                   value="{{ Auth::user()->name }}">

        </div>

        <div class="input-group">

            <label>
                New Password
            </label>

            <input type="password"
                   name="password">

        </div>

        <div class="input-group">

            <label>
                Change Avatar
            </label>

            <input type="file"
                   name="avatar">

        </div>

        <button type="submit"
                class="save-btn">

            Save Changes

        </button>

    </form>

</div>

</body>

</html>