<?php

// session_start();

// #Database connection file 
// include "db_conn.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.KLBookEmporium.com</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <section>

        <nav>

            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="review.php">Reviews</a></li>


                </div>
                </div>
            </ul>

            <div class="social_icon">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

        </nav>

        <div class="main">

            <div class="main_tag">
            </div>
            </head>

            <body>
                <!-- partial:index.partial.html -->
                <div class="box-form">
                    <div class="left">
                        <div class="overlay">
                            <h1>KL Book Emporium</h1>
                            <p>Login or sign up for a better user experience</p>
                            <span>
                            </span>
                        </div>
                    </div>


                    <div class="right">
                        <h5>Login</h5>
                        <p>Don't have an account? <a href="signup.php">Signup now.</a> </p>
                        <div class="inputs">
                            <input type="text" placeholder="user name">
                            <br>
                            <input type="password" placeholder="password">
                        </div>

                        <br><br>

                        <div class="remember-me--forget-password">
                            <!-- Angular -->
                            <label>
                                <input type="checkbox" name="item" checked />
                                <span class="text-checkbox"> Remember me</span>
                            </label>
                            <p>forget password?</p>
                        </div>

                        <br>
                        <button>Login</button>
                    </div>

                </div>
                <!-- partial -->

            </body>

</html>