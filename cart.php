
<?php
session_start();
$db = mysqli_connect('localhost','root','','Student');
if(isset($_GET['action']) && $_GET['action']=="delete")
{ 
    $slno=$_GET['slno'];
    $fprice=$_GET['price'];
    $query="DELETE FROM orders WHERE slno='$slno'";
    mysqli_query($db,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
  
table {
    font-family: arial, sans-serif;
    border-collapse:separate;
    border-spacing:1px;
    opacity:0.8;
    width:100%;  
    
}
    
input[type=time] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

h1{
    color: #fefefe;
    background:#4CAF50;
    text-align: center;
}

td,th{
    border: 1px solid #white;
    text-align:center;
    padding:18px;
   
}
    
td{
    background:#fefefe;
}
.button {
    background-color: #ddd;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    /*display: inline-block;*/
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 16px;
}
.button:hover {
    background-color: #f1f1f1;
}
    a{
      text-decoration: none;
      color: #000;  
}
.button1{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}
    
.button1:hover {
    opacity: 0.8;
}
    
h3{
    color: #fefefe;
}
    h2{
        color:#fefefe; 
    }  
    
</style>
</head>                 
<body background="images/nwewwe.jpg">
   
<h2 style="text-align: center">FOOD MENU</h2>
    
<table>
  <tr bgcolor=#4CAF50>
    <h1><strong>CART</strong></h1>
   </tr>
<?php
    $id=$_SESSION["orderid"];
$db = mysqli_connect('localhost','root','','Student');
$query = "SELECT slno,name,price FROM orders WHERE orderid='$id'";
$result = mysqli_query($db,$query);
$totalprice=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> ". $row["name"]. "</td> ";
        echo "<td> ". $row["price"]. "</td> ";
        echo "<td><button class='button'><a href='cart.php?page=cart&action=delete&slno={$row['slno']}&price={$row['price']}'>Remove</a></button></td>";
        echo"</tr>";
        $totalprice+=$row['price'];
    }
    echo"<tr>";
    echo"<td><b>TOTAL</b></td>";
    echo"<td><b>".$totalprice."</b></td>";
    echo"<td></td>";
    echo"</tr>";
    echo"</table>";
    echo"<br><br>";
    echo"<form action='final.php' method='POST'>";
    echo"<h3>Enter the time of pickup</h3>";
    echo"<input type='time' placeholder='Enter Time' name='time' required>";
    echo"<button class='button1' style='float:right'>CONFIRM</button>";
    echo"</form>";

?>