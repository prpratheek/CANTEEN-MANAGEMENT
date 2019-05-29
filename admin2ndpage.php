<html>
<head>
<style>
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
    
h2{
    color: #fefefe;
}
    
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
         
</style>
</head> 
<body background="images/nwewwe.jpg">
    <br><br>
    <h2>ADD FOOD</h2>
    <form action="addfood.php" method="post">
    <input type='text' placeholder='Enter foodname' name='fname' required>
    <input type='text' placeholder='Enter price' name='price' required><br>
    <button class='button' type="submit">Add Item</button>
    </form>
    <br><br>
    <form action="addjuice.php" method="post">
    <h2>ADD JUICE</h2>
    <input type='text' placeholder='Enter juicename' name='jname' required>
    <input type='text' placeholder='Enter price' name='price' required><br>
    <button class='button' type="submit">Add Item</button>
    </form>
</body>