<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php 

include("connection.php");

//getting the id of the data from the url
$id = $_GET['id'];

//deleting the row form table
$result = mysqli_query($myslqi, "DELETE FROM products WHERE id=$id");

//redirecting to the display page
header("Location: view.php");
?>