<?php
$db = mysqli_connect('localhost','root','','Student');
$fname = $_POST['fname'];
$price = $_POST['price'];
$query="INSERT INTO FOOD (foodname,price) VALUES ('$fname','$price')";
if(mysqli_query($db,$query))
{
    echo '<script> alert("Item added");</script>';
}
?>