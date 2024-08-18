<?php
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username=$_POST['username'];
    // $address=$_POST['address'];
    $phone=$_POST['phone'];
    // $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`)
	VALUES (NULL, '$username', '$email', '$phone', '$password');";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Data inserted successfully";
        header('location:form.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register us</title>
    <link rel="stylesheet" href="cwh.css">

</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="home.php
">HOME</a></li>
            <li><a href="ABOUT-US.php
">ABOUT</a></li>
            <li  class="act"><a href="log.php
">LOGIN</a></li>
            <!-- <div class="sub1">
                <ul>
                    <li><a href="#">DONOR</a></li>
                    <li><a href="#">NGO</a></li>
                </ul>
            </div> -->
            <li><a href="contact.php
">CONTACT US</a></li>
            <li><a href="admlog.php
">ADMIN</a></li>
        </ul>
        </div>
    <div class="container">
        <div class="header">
        <center><h1>Register</h1></center>
        </div>
        <div class="main">
    <form method="POST">
        <center><div class="formdesign" id="username">
          Username:<input type="text" name="username" required><br><b><span class="formerror"> </span></b>
        </div></center>
    <center><div class="formdesign" id="email">
            Email: <input type="email" name="email" required><br><b><span class="formerror"> </span></b>
        </div></center>

    <center> <div class="formdesign" id="phone">
            Phone: <input type="phone" name="phone" required><br><b><span class="formerror"></span></b>
        </div></center>

    <center><div class="formdesign" id="pass">
    password:<input type="password" name="password" required><br><b><span class="formerror"</span></b>
        </div></center>


        <center><a href="form.php
"><input  type="submit" class="but" value="Register"></a></center>

    </form>
    </div>
    </div>
</body>
</html>