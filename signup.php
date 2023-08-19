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
</style>
</head>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <form>
                <input type="text" class="signup-input" placeholder="Username" required>
                <input type="email" class="signup-input" placeholder="Email" required>
                <input type="password" class="signup-input" placeholder="Password" required>
                <input type="password" class="signup-input" placeholder="Confirm Password" required>
                <button type="submit" class="signup-button">Sign Up</button>
            </form>
    </div>
</body>

</html>