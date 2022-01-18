<?php
include('db.php');
if(!empty($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $bal = $_POST['balance'];
    $q = "insert into bank_customers values(NULL,'$name','$email','$bal')";
    $result = mysqli_query($conn,$q);
    if($result){
        echo "<script>alert('Customer added successfully');</script>";
    }
    else{
        echo"<script>alert('Customer added successfully');</script>";
    }
}
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <label id="bar" class="fa fa-bars"></label>
    </nav><br>
    <div class="header">
        <div class="text"><a href="index.php">Gringotts Bank</a></div>
    </div>
    <form method="POST" action="">
        <div class="container">
            <h1>Create User</h1>
            <hr>
            <label for="name"><strong>Name: </strong></label>
            <input type="text" name="name" required autocomplete="FALSE" />

            <label for="email"><strong>Email: </strong></label>
            <input type="email" name="email" required autocomplete="FALSE"/>

            <label for="balance"><strong>Balance (in $): </strong></label>
            <input type="number" name="balance" required autocomplete="FALSE"/>

            <input name="submit" type="submit" value="Create >" class="btn"/> 
        </div>



    </form>
    <div class="footer">Copyright &copy; Gringotts Bank Pvt Ltd.</div>
</body>
</html>