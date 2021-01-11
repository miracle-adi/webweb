<?php session_start(); ?>

<?php 
if(!isset($_SESSION['valid'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add data php</title>
</head>
<body>
    <?php 
    
    include_once("connection.php");

    if(isset($_POST['submit_item'])){
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $loginId = $_SESSION['id'];

        // checking empty fields
        if(empty($name) || empty($qty) || empty($price)) {                
            if(empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
            
            if(empty($qty)) {
                echo "<font color='red'>Quantity field is empty.</font><br/>";
            }
            
            if(empty($price)) {
                echo "<font color='red'>Price field is empty.</font><br/>";
            }
        

        //link to previous page
        echo "<br/><a href='javasript:self.histry.back();'>Go Back</a>";
        
        }else {
            // if all the fields are filled (not empty)
            //insert data to database

            $result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id) VALUES('$name','$qty','$price','$loginId')");

            //dislay success message
            echo "<font color='green'>Data addes successfully</font>";
            echo "<br/><a href='view.php'>View Result</a>";
        } 
    }
    ?>
    
</body>
</html>