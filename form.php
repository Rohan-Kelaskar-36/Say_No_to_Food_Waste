
<?php

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name=$_POST['name'];
    // $address=$_POST['address'];
    $phone=$_POST['phone'];
    // $gender=$_POST['gender'];
    $adress=$_POST['adress'];
    $ptime=$_POST['ptime'];

    $sql="INSERT INTO `formm` (id, name, phone, adress, ptime)
	VALUES (NULL, '$name', '$phone','$adress', '$ptime');";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Data inserted successfully";
        header('location:form3.php');
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
    <title>food-details</title>
    <link rel="stylesheet" href="formm.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="ABOUT-US.php">ABOUT</a></li>
            <li><a href="log.php">LOGIN</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="admlog.php">ADMIN</a></li>
        </ul>
        </div>
       <h2><pre>Welcome,
Thanks for joining us:)
        </pre></h2>
        <center><div class="container">
       <form method="POST">
            <h1>Food Details</h1><br>
<label class="nm">Name</label>
<input type="text" placeholder="enter your name" name="name" required><br><br><br>
<label>Number</label>
<input type="tel" maxlength="10" name="phone" placeholder="enter your phone number" required><br><br><br>
<label class="adr">Adress</label>
<input type="text" placeholder="enter your adress" name="adress" required> <br><br><br>
<label class="fd">prepared time</label>
<input type="time" class="tim" name="ptime" required><br><br><br>
<!-- <label class="abc"><center>Select Picture</center> </label> -->
<!-- <center><input type="file" class="filee" accept="image/png,image/jpj,image/jpeg" required></center>      <br><br><br> -->
<center><input type="submit" value="Donate" id="submit"></center>
</form>
</div>
</center>
</body>
</html>