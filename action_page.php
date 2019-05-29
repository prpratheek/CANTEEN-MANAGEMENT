<?php
$db = mysqli_connect('localhost','root','','Student');
$usn = $_POST['USN'];
$pass = $_POST['psw'];
$pass1 =$_POST['psw-repeat'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      echo '<script> alert("Invalid email");</script>';
    }
if($pass1!=$pass)
{
    echo '<script> alert("Passwords do not match");</script>';
}
if(strlen((string)$phone)<10)
   {
       echo '<script> alert("Invalid phone number");</script>';
   }  
    $query = "INSERT INTO LOGIN (USN,password,EMAIL,PHONE) VALUES ('$usn','$pass','$email','$phone')";
    if(mysqli_query($db,$query))
    {
        echo "<h1 style='color:#fefefe;text-align:center;'><br><br><br><br><br><br>Sign-up Successfull</h1><br>";
        echo "<a style='color:#fefefe;' href='login.html'><h3 style='text-align:center;'>Click here to login</h3></a>";
        echo "<body background='https://wallpapershome.com/images/pages/pic_h/17860.jpg' >";
    }
?>