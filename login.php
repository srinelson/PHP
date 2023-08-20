<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    
    $mysqli = require __DIR__ . "../includes/dbh.inc.php";
    
    $sql = sprintf("SELECT * FROM user 
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc(); 
    
    if ($user) {
        
       if (password_verify ($_POST["password"], $user["password_hash"])) {
            
            die("Login succesful");
        }
    }

}


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
                        <form method="post">

                            <br>
                            <p>Don't have an account? <a href="signup.php">Signup now.</a> </p>
                            </br>
                            <div class="inputs">
                                <label for="email">Email</label>
                                <input type="email" name="email">
                                <br>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
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
                    </form>
                </div>
                <!-- partial -->

            </body>

</html>