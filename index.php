<?php
    require_once("config/connection.php");

    if ( isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = mysqli_query($conn, "SELECT * FROM
        users where username = '$username'");

        $user = mysqli_fetch_assoc($query);

        if ( $username && $password == $user['PasswordHash']){
            header("Location: main.php");
        }else{
            header("Location: index.php");
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">

    <div class="login-container">
        <div class="login-header">
            <div class="university-icon">U</div>
            <h1>University Portal</h1>
            <p>University Management System</p>
        </div>

        <form action="" method="POST">
            
            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >
            </div>

            <button type="submit" name="submit" class="btn-primary">
                Sign In
            </button>
        </form>

        <p class="login-footer">
            &copy; 2026 University Management System
        </p>
    </div>

</body>
</html>