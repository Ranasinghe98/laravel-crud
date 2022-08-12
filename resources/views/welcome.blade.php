<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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

        </style>
    </head>
    <body>
        <x-header />
        <div class="navbar">
            <div class="navContent">
                <h1>Page Routing LARAVEL</h1>
                <li><a href="/add">Add Data</a></li>
                <li><a href="/users">View Users</a></li>
                <li><a href="/userslist">Delete / Edit User</a></li>
            </div>
        </div>
        <x-footer />
    </body>
</html>
