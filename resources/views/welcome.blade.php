<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .navbar {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .navContent li{
                list-style: none;
                display: inline-block;
                padding: 10px 30px;
            }
            
            .navContent a{
                font-size: 2rem;
            }

            .innerInfo{
                display: flex;
                flex-direction: column;
                padding: 20px;
            }



        </style>
    </head>
    <body>
        <x-header />
        <div class="userInfo">
            <div class="innerInfo">
                <h2>Hello User</h2>
                <a href="/logout">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
        <div class="navbar">
            <div class="navContent">
                <h1>Welcome to Dashboard</h1>
                <li><a href="/add">Add Data</a></li>
                <li><a href="/users">View Users</a></li>
                <li><a href="/userslist">Delete / Edit User</a></li>
            </div>
        </div>
        <x-footer />
    </body>
</html>
