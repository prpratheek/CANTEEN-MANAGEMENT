<?php
session_start();
$db = mysqli_connect('localhost','root','','Student');
$time = $_POST['time'];
$id=$_SESSION["orderid"];
$query="UPDATE orders set time='$time' Where orderid='$id'";
if(mysqli_query($db,$query))
{
        echo "<h1 style='color:#fefefe;text-align:center;'><br><br><br><br><br><br>Order Placed</h1><br>";
        echo "<h2 style='color:#fefefe;text-align:center;'>Pickup Time".$time."</h2><br>";
        echo "<h2 style='color:#fefefe;text-align:center;'>Order Id".$id."</h2><br>";
        echo "<body background='https://wallpapershome.com/images/pages/pic_h/17860.jpg' >";
}
?>