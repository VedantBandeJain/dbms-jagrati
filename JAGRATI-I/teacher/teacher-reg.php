<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $link=mysqli_connect('localhost:3307','root','','jagrati') or die ("not able to connect the databaes");
        $roll = $_POST['roll'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $year = $_POST['year'];
        $degree = $_POST['degree'];
        $branch = $_POST['branch'];
        $password = $_POST['password'];

    $sql = "INSERT INTO teacher (roll, name, email,contact, year, degree, branch ,password) VALUES ('$roll', '$name', '$email', '$contact', '$year', '$degree', '$branch', '$password' )";
        $result=mysqli_query($link,$sql);
        echo"data entered successfully";
    }
    

?>