<?php
$db = mysqli_connect('localhost','root','','Student');
$usn = $_POST['uname'];
$pass = $_POST['psw'];
$query = "SELECT * FROM ADMINLOGIN WHERE username = '$usn' AND password = '$pass'";
$result = mysqli_query($db,$query);
if($result)
{
    $num_rows=mysqli_num_rows($result);
    if($num_rows==0)
    {
        echo '<script> alert("invalid login details");</script>';
    }
    else
        header('Location: http://localhost/CMS/admin2ndpage.php');
}
else
{
    header('Location: http://localhost/CMS/login.html');
}

?>