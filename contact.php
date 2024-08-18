<?php

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    // $address=$_POST['address'];
    
    // $gender=$_POST['gender'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];

    $sql="INSERT INTO `contus` (id,fname,lname,email,phone,feedback)
	VALUES ( NULL,'$fname','$lname','$email','$phone', '$feedback');";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"feedback inserted successfully";
        header('location:home.php');
    }
    else
    {
        die(mysqli_error($con));
    }

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="ABOUT-US.php">ABOUT</a></li>
            <li><a href="log.php">LOGIN</a></li>
            <li class="act"><a href="contact.php">CONTACT US</a></li>
            <li><a href="admlog.php">ADMIN</a></li>
        </ul>
        </div>
    <div class="container">
       <form method="POST">
        <h1>CONTACT US</h1>
        <input type="text" id="firstname" name="fname" placeholder="enter your first name" required>
        <input type="text" id="lastname" name="lname" placeholder="enter your last name" required>
        <input type="email" id="email" placeholder="ex:abc@gmail.com" name="email" required>
        <input type="tel" maxlength="10" id="mobile" name="phone" placeholder="enter your ph.no" required>
        <h4>Type your message here...</h4>
        <textarea name="feedback" required></textarea>
        <input type="submit" value="send" id="submit">
       </form>
    </div>
</body>
</html>