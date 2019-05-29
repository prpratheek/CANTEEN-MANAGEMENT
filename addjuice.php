<?php
$db = mysqli_connect('localhost','root','','Student');
$jname = $_POST['jname'];
$price = $_POST['price'];
$query="INSERT INTO juice (juicename,price) VALUES ('$jname','$price')";
if(mysqli_query($db,$query))
{
    echo '<script> alert("Item added");</script>';
}
?>