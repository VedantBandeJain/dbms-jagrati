<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="teacher-reg.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Jagrati | Teacher-registration</title>
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
            <div class='header-items-item'><a href="teacher-login.php" 
                style="color: white; text-decoration: none;" id="login"
                >Logout</a></div>
        </div>

    </div>
    <div class='body-intro'>
        <div class='header-empty'></div>
        <div class="body-tagline">TAKE A CLASS</div>
        <form method="post" action="class.php" id="form1" >
         <div class="input-details">
         <input name ="class" placeholder="Enter class">
         <!-- <input type="submit" name="submit"  class="btn"> -->
         <button type="submit" form="form1" value="Submit" class="btn">Mark Attendance</button>
         </div>
         <div class="book" style="text-align:center; padding-bottom: 80px; margin-top: 10px;" >
            <button class="btn" style="width:250px;" onclick="openWin()">REGISTER NEW STUDENT</button>
         </div>
        </form>
    </div>
    <script>
        function openWin() {
        window.open("student-reg.php");
        }
    </script>
    
    
</body>

</html>
