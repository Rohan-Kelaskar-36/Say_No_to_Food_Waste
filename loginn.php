<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "connect.php";
    $username = mysqli_real_escape_string($con, $_POST['username']);
           $password = $_POST['password'];
   
       echo "$username";
       echo "$password";
   
       if (empty($_POST['username']) || empty($_POST['password'])) {
           echo '<div class="a">All Fields must be entered.</div>';
           die();
       } else {
           $username = mysqli_real_escape_string($con, $_POST['username']);
           $password = $_POST['password'];
   
           $sql = "SELECT *  FROM user where username='$username' AND password='$password'";
           $result = mysqli_query($con, $sql) or die("Query Failed.");
           $row = mysqli_fetch_assoc($result);
           if (empty($row['username']) || empty($row['password'])) {
               echo "Enter valid username or password";
           } else {
               if ($username == $row['username'] && $password == $row['password']) {
                   session_start();
                   $_SESSION["password"] = $_POST['username'];
                   header("Location: form.php");
               } else {
                   echo '<div class=>Username and Password are not matched.</div>';
               }
           }
       }
   }


// session_start();
// if (isset($_POST['username'])) {
//     include "connect.php";
//     // $con = mysql_connect('localhost', 'username', 'password', 'login');
//     $username = mysqli_real_escape_string($con, $_POST['username']);
//     $password = mysqli_real_escape_string($con, $_POST['password']);
//     $sql = "select * from user where username='$username' AND password='$password'";
//     $result = mysqli_query($con, $sql);
//     if (mysql_num_rows($result) == 1) {
//         $_SESSION['logged_in'] = true;
//         $_SESSION['username'] = $username;
//         header('location:form.php');
//         exit;
//     } else {
//         echo 'Incorrect login details';
//     }
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginn.css">
<style>
    .subm{
    background-color:#b1d3cb;;
    color:white;
            
}
</style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="ABOUT-US.php">ABOUT</a></li>
            <li class="act"><a href="log.php">LOGIN</a></li>
            <!-- <div class="sub1">
                <ul>
                    <li><a href="#">DONOR</a></li>
                    <li><a href="#">NGO</a></li>
                </ul>
            </div> -->
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="admlog.php">ADMIN</a></li>
        </ul>
        </div>
    <div class="container">
        <div class="header">
            <h1>Login</h1>
        </div>
        <div class="main">
            <form method="POST">
                <span>
                    <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="enter your username"required>
                            </span><br>
                            <span>
                                <i class="fa fa-lock"></i>
                                            <input type="password" name="password" placeholder="Password"required>
    
                            </span><br>
                            <a href="form.php"><input type="submit" class="subm" name="submit" ></a>
            </form>
        </div>
    </div>
    
</body>
</html>