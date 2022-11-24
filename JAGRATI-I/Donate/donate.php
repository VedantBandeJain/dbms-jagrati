<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $link=mysqli_connect('localhost:3307','root','','jagrati') or die ("not able to connect the databaes");
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $pin = $_POST['pin'];
        $amount = $_POST['amount'];

    $sql = "INSERT INTO donator (name, dob, email,contact, city, address, pin ,amount) VALUES ('$name', '$dob', '$email', '$contact', '$city', '$address', '$pin', '$amount' )";
        $result=mysqli_query($link,$sql);


    
    }
    