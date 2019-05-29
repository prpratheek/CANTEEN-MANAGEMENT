<?php
session_start();
$db = mysqli_connect('localhost','root','','Student');
$usn = $_POST['uname'];
$_SESSION["orderid"] =$_POST['uname'];
$pass = $_POST['psw'];
$query = "SELECT * FROM LOGIN WHERE USN = '$usn' AND password = '$pass'";
$result = mysqli_query($db,$query);
if($result)
{
    $num_rows=mysqli_num_rows($result);
    if($num_rows==0)
    {
        echo '<script> alert("invalid login details");</script>';
    }
    else
        header('Location: http://localhost/CMS/2nd page.html');
}
else
{
    header('Location: http://localhost/CMS/login.html');
}

?>