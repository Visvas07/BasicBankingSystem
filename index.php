<?php
require('db.php');



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./images/bank-logo.jpg">
    <link rel="stylesheet" href="styles.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Banking Application</title>
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <label id="bar" class="fa fa-bars"></label>
    </nav><br>
    <div class="header">
        <div class="text"><a href="index.php">Gringotts Bank</a></div>
    </div>
    <div class="centered">
        <div class="cards">
            <div class="card">
                <img src="./images/add-remove.png" alt="add-remove" style="width: 100%;">
                <h1>Add/Remove User</h1>
                <p>Add or Remove bank customers</p><br>
        
                <p><button value="add"><a href="user.php">Add/Remove  <i class="fa fa-angle-right"></i></a></button></p> <br>
            </div>
            <div class="card">
                <img src="./images/customer-list.jpg" alt="bank-transfer" style="width: 100%;">
                <h1>Customer List</h1>
                <p>View all Customers</p><br>
        
                <p><button value="list"><a href="view-list.php">View  <i class="fa fa-angle-right"></i></a></button></p> <br>
            </div>
            <div class="card">
                <img src="./images/info.jpg" alt="bank-transfer" style="width: 100%;">
                <h1>About Us</h1>
                <p>About the bank</p><br>
        
                <p><button value="info"><a href="about.php">Want to learn more about us? <i class="fa fa-angle-right"></i></a></button></p> <br>
            </div>
        </div>
    </div>
    <div class="footer">Copyright &copy; Gringotts Bank Pvt Ltd.</div>
</body>
</html>