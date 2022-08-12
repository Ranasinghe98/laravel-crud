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
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:display=swap');
            html, body {
                margin: 0;
            }

            .addData{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
            }

            .addInner{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 450px;
            }

            form{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: #ECCCB2;
                width: 400px;
                height: 400px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px #3b3b3b;
            }

            form h1{
                color: black;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
            }

            form input{
                width: 250px;
                height: 35px;
                margin-bottom: 15px;
                border: solid black;
                border-width: 0px 0px 2px 0px;
                outline: none;
                border-radius: 3px 3px 0px 0px;
                font-family: 'Montserrat', sans-serif;
                color: black;
                font-weight: 400;
                padding: 0px 10px;
            }

            form button{
                background-color: #0d944a;
                color: #fff;
                width: 150px;
                padding: 10px 10px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 500;
                text-transform: uppercase;
                border: 1px solid black;
                border-radius: 5px;
                transition: 0.5s;
            }

            form button:hover{
                background-color: #086632;
                cursor: pointer;
            }



            .aboutContent a{
                text-decoration: none;
                color: #636b6f;
                font-weight: 600;
            }

        </style>
    </head>
    <body>
        <x-header />
        <div class="addData">
            <div class="addInner">
                <form action="add" method="POST">
                    <h1>Add Member</h1>
                    {{csrf_field()}}
                    <input type="text" name="name" placeholder="Enter name">
                    <input type="email" name="email" placeholder="Enter email">
                    <input type="text" name="phone" placeholder="Enter telephone">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <x-footer />
    </body>
</html>