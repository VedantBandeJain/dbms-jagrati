<?php
// getting all values from the HTML form
if (isset($_POST['submit'])) {
    $link = mysqli_connect('localhost:3307', 'root', '', 'jagrati') or die("not able to connect the databaes");
    $name = $_POST['name'];
    $class = $_POST['class'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $gender = $_POST['gender'];
    $village = $_POST['village'];
    $contact = $_POST['contact'];
    $contact2 = $_POST['contact2'];

    $sql = "INSERT INTO student (name, class, father,mother, gender, village, contact ,contact2) VALUES ('$name', '$class', '$father', '$mother', '$gender', '$village', '$contact', '$contact2' )";
    $result = mysqli_query($link, $sql);
    echo "Student registered successfully";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="student-reg.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Jagrati | Student-registration</title>
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
            <div class='header-items-item'><a href="./loginPages/studentlogin.html" target="_blank" style="color: white; text-decoration: none;" id="login">Login</a></div>
        </div>

    </div>
    <div class='body-intro'>
        <div class='header-empty'></div>
        <div class="body-tagline">ENTER STUDENT DETAILS</div>
        <form action="" method="post">
            <div class="input-details">
                <input type="text" placeholder="Enter Full Name" name="name" required>
                <input type="text" placeholder="Enter Class" name="class" required>
            </div>

            <div class="input-details">
                <input type="text" placeholder="Enter Father's name" name="father" required>
                <input type="text" placeholder="Enter Mother's name" name="mother" required>
            </div>

            <div class="input-details2">
                <!-- <input type="text" placeholder="Gender" name="gender" required> -->
                <div style="display: flex; margin-left: 42px;">
                    <input type="radio" id="age1" name="gender" value="male">
                    <label for="age2" style="padding-top: 9px;
                        padding-left: 24px;">Male</label>
                    <input type="radio" id="age2" name="gender" value="female" 
                    style="margin-left: 20px;">
                    <label for="age2" style="padding-top: 9px;
                     padding-left: 24px;">Female</label>
                </div>

                <!-- <input type="text" placeholder="Village" name="village" required> -->
                <select name="village" class="sel" style="margin-left: 322px;">
                    <option value="" disabled selected>---Select Village ---</option>
                    <option value="village">Gadheri</option>
                    <option value="Meghawan">Meghawan</option>
                    <option value="Khamaria">Khamaria</option>
                </select>
            </div>

            <div class="input-details">
                <input type="text" placeholder="Enter Phone Number" name="contact" pattern="[1-9]{1}[0-9]{9}" required>
                <input type="text" placeholder="Alternate Phone Number" pattern="[1-9]{1}[0-9]{9}" name="contact2">
            </div>

            <div class="input-details">
                <input type="submit" class="btn" name="submit">
                <input type="reset" class="btn">
            </div>

        </form>
    </div>


</body>

</html>