<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body>
    <div id="header">
        Welcome to my PHP lesson
    </div>
    <?php 
    if(isset($_SESSION['valid'])) {
        include("connection.php");                    
        $result = mysqli_query($mysqli, "SELECT * FROM login");
        ?>
        Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
        <br/>
        <a href='view.php'>View and Add Products</a>
        <br/><br/>
        <?php
    } else{
        echo "You must be logged in to view this page. <br><br>";  
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a> <br><br>"; 
    }//error because single/ double quotation marks
    ?>
    <div id="footer" class="">
        Created by Hadi
    </div>
</body>
</html>