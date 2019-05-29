<?php
session_start();
$db = mysqli_connect('localhost','root','','Student');
if(isset($_GET['action']) && $_GET['action']=="add")
{ 
    $fname=$_GET['name'];
    $fprice=$_GET['price'];
    $id=$_SESSION["orderid"];
    $query="INSERT INTO orders (orderid,name,price) VALUES ('$id','$fname','$fprice')";
    mysqli_query($db,$query);
}

?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: separate;
    border-spacing:1px; 
    width:100%;  
}

td,th{
    border: 1px solid #white;
    text-align:center;
    padding:18px;
   
}
td{
    background:#fefefe;
    opacity:0.8;
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

.button:hover {
    background-color: #f1f1f1;
}
    
a{
      text-decoration: none;
      color: #000;  
}
 
    h2{
        color:#fefefe;
    }
</style>
</head>                 
<body background="images/jjjj.jpg">
   
<h2 style="text-align: center">JUICE MENU</h2>
    
<table>
  <tr bgcolor=#4CAF50>
    <th><i><strong>JUICE</strong></i></th>
    <th><i><strong>PRICE</strong></i></th>
    <th><i><strong>ADD TO ORDER</strong></i></th>
  </tr>
<?php
$db = mysqli_connect('localhost','root','','Student');
$query = "SELECT juicename,price FROM juice";
$result = mysqli_query($db,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> ". $row["juicename"]. "</td> ";
        echo "<td> ". $row["price"]. "</td> ";
        echo "<td><button class='button'><a href='juice.php?page=juice&action=add&name={$row['juicename']}&price={$row['price']}'>Add to cart</a></button></td>";
        echo"</tr>";
    }
    echo"</table>";
    echo"<button class='button1' style='float:right'><a href='cart.php'><b>NEXT</b></a>";
    echo"<button class='button1'><a href='foodtest.php'><b>FOOD MENU</b></a>";
} 

else {
    echo "0 results";
}
?>