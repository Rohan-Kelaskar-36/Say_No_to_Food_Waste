<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "connect.php";
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $password = $_POST['password'];

    echo "$name";
    echo "$password";

    if (empty($_POST['name']) || empty($_POST['password'])) {
        echo '<div class="a">All Fields must be entered.</div>';
        die();
    } else {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $password = $_POST['password'];

        $sql = "SELECT `name`,`password` FROM `admin` WHERE `name` = '{$name}' AND `password`= '{$password}'";
        $result = mysqli_query($con, $sql) or die("Query Failed.");
        $row = mysqli_fetch_assoc($result);
        if (
            empty($row['name']) || empty($row['password'])
        ) {
            echo "Enter valid name or password";
        } else {
            if (
                $name== $row['name'] && $password == $row['password']
            ) {
                session_start();
                $_SESSION["name"] = $_POST['name'];
                // header("Location: form.php");
                header("Location:http://localhost/phpmyadmin/");
            } else {
                echo '<div class=>nameand Password are not matched.</div>';
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page design</title>
</head>

<body background="back2.jpg">
    <div class="menu">
        <ul>
            <li><a href="home.php
">HOME</a></li>
            <li><a href="ABOUT-US.php
">ABOUT</a></li>
            <li><a href="log.php
">LOGIN</a></li>
            <!-- <div class="sub1">
                <ul>
                    <li><a href="#">DONOR</a></li>
                    <li><a href="#">NGO</a></li>
                </ul>
            </div> -->
            <li><a href="contact.php
">CONTACT US</a></li>
            <li class="act"><a href="admlog.php
">ADMIN</a></li>
        </ul>
    </div>
</body>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-size: cover;
    }

    .menu {
        background: navy;
        text-align: center;
        /* position: relative; */
    }

    .menu ul {
        display: inline-flex;
        list-style: none;
        color: navy;
    }

    .menu ul li {
        width: 150px;
        margin: 8px;
        padding: 8px;
        border-radius: 10px;
    }

    .menu ul li a {
        text-decoration: none;
        color: white;
    }

    .act,
    .menu ul li:hover {
        background: orange
    }

    table {
        background-color: black;
        border: 8px solid white;
        border-radius: 25px;
        background: rgba(0, 0, 0, 0.7);
        margin-left: 430px;
        margin-bottom: 10px;
    }

    #type {
        width: 300px;
        height: 32px;
        border: 0;
        outline: 0;
        background: transparent;
        border-bottom: 3px solid white;
        color: white;
        font-size: 25px;
    }

    input::-webkit-input-placeholder {
        font-size: 15px;
        line-height: 3;
        color: white;

    }

    #btn {
        width: 150px;
        background-color: orangered;
        height: 35px;
        font-size: 20px;
        border-radius: 20px;

    }

    #btn:hover {
        background-color: greenyellow;
    }

    .imggg {
        border-radius: 10px;
    }

    label {
        color: rgb(120, 177, 224);
        /* margin-bottom: 20px; */
    }
</style>
<br><br>

<form method="POST">
<table width="25%" border="0" cellspacing="40" align="center">
    <tr>
        <td align="center"><img class="imggg" src="imgg.jpg" width="45%"></td>
    </tr>
    <tr>
        <td>
            <label>name
            </label>
            <input type="name
" placeholder="name" name="name" id="type" required>
        </td>

    </tr>
    <tr>
        <td>
            <label>Password</label>
            <input type="password" placeholder="******" name="password" id="type" required>
        </td>


    </tr>
    <tr>
        <td align="center"><input type="submit" name="submit" value="Login" id="btn"></td>
    </tr>
</table>
</form>
</body>

</html>