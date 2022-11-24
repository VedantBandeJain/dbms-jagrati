<?php
include("conn.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myroll = mysqli_real_escape_string($db, $_POST['roll']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT roll FROM teacher WHERE roll = '$myroll' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //session_register("myroll");
        $_SESSION['login_user'] = $myroll;

        header("location: dashboard.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="teacher-login.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Jagrati | Teacher-login</title>
</head>

<body>
    <div class='header'>
        <div class='header-logo'>
            <div clase='header-logo-imageDiv'>
                <img src='https://jagrati.iiitdmj.ac.in/static/home/logo.png' alt='Jagrati' class='header-logo-image' />
            </div>
            <div class='header-logo-text'>Jagrati</div>
        </div>
        <div class='header-items'>

            <div class='header-items-item'>Home</div>
            <div class='header-items-item'>About Us</div>
            <div class='header-items-item'>Captures</div>
            <div class='header-items-item'><a href="#" target="_blank" style="color: white; text-decoration: none;" id="login">Login</a></div>
        </div>

    </div>
    <div class='body-intro'>
        <div class='header-empty'></div>
        <div class="body-tagline">LOGIN TO START TEACHING</div>
        <form action="" method="post">
            <input type="text" placeholder="Enter Roll No." name="roll" required>
            <input type="password" placeholder="Enter password" name="password" required>

            <div class="input-details">
                <input type="submit" class="btn" placeholder="Login">
                <input type="reset" class="btn">
            </div>
            <div class="register-pg-opener">
                Don't have account? <a href="teacher-reg.html" target="_blank">Register</a>
            </div>
        </form>
    </div>


</body>

</html>