<?php

include_once 'header.php'
// session_start();

#Database connection file 
// include "db_conn.php";

?>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.signup-container {
    background-color: #fff;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width: 500px;
    text-align: center;
    margin-top: 150px;
    margin-left: 450px;
    align-items: center;
    justify-content: center;
}

.signup-container h2 {
    margin-bottom: 20px;
}

.signup-input {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.signup-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 15px;
    width: 100%;
    cursor: pointer;
}

.signup-button:hover {
    background-color: #0056b3;
}

/*Footer*/

footer {
    width: 100%;
    background: #ffffff;
}

footer .footer_main {
    width: 100%;
    display: flex;
    justify-content: space-around;
}

footer .footer_main .tag {
    margin: 10px 0;
}

footer .footer_main .tag img {
    width: 100px;
    margin-bottom: 10px;
}

footer .footer_main .tag p {
    width: 250px;
    line-height: 22px;
    text-align: justify;
}

footer .footer_main .tag h1 {
    font-size: 25px;
    margin: 25px 0;
    color: #000;
}

footer .footer_main .tag a {
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
}

footer .footer_main .tag i {
    margin-right: 10px;
}

footer .footer_main .tag .social_link i {
    margin: 0 5px;
}

footer .footer_main .tag .search_bar {
    width: 230px;
    height: 30px;
    background: rgba(202, 202, 202);
    border-radius: 25px;
}

footer .footer_main .tag .search_bar input {
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
}

footer .footer_main .tag .search_bar button {
    padding: 7px 15px;
    background: #089da1;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
}

footer .end {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
}

footer .end span {
    color: #089da1;
    margin-left: 10px;
}
</style>

</head>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">


            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>

            <div><label for="email">email</label>
                <input type="email" id="email" name="email">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <button>Sign Up</button>

        </form>
    </div>

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="image/logo.png">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quaerat ipsa aspernatur ad
                    sequi, dolore eveniet vitae quasi. Excepturi ipsa odio impedit sequi at hic velit, minus
                    vero sint. Voluptas?
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Featured</a>
                <a href="#">Arrivals</a>
                <a href="#">Reviews</a>
                <a href="#">Blog</a>

            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>

            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>
            </div>

        </div>



    </footer>


</body>

</html>