<?php
require('db.php');
mysqli_select_db($conn,"sparks");
if(!empty($_POST['submit'])){
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amt = $_POST['amount'];
    
    $q1="select * from bank_customers where Name = '$sender'";
    $query1 = mysqli_query($conn,$q1);
    $result1 = mysqli_fetch_array($query1);


    $q2="select * from bank_customers where Name = '$receiver'";
    $query2 = mysqli_query($conn,$q2);
    $result2 = mysqli_fetch_array($query2);
/*
     if(isset($result2['Name'])){
         echo "YEs";
     }
     else{
         echo "No";
     }*/
    if($amt<0){
        echo '<script>';
        echo 'alert("Enter valid amount")';
        echo '</script>';
    }
    else if($amt>$result1['Balance']){
        echo '<script>';
        echo 'alert("Not enough Balance")';
        echo '</script>';
    }
    else if($amt==0){
        echo '<script>';
        echo 'alert("Please enter proper amount")';
        echo '</script>';
    }
    else{
        $nb1 = $result1['Balance'] - $amt;
        $q3 = "update bank_customers set Balance = $nb1 where Name = '$sender'";
        mysqli_query($conn,$q3);

        $nb2 = $result2['Balance'] + $amt;
        $q3 = "update bank_customers set Balance = $nb2 where Name = '$receiver'";
        mysqli_query($conn,$q3);

        $q = "insert into transaction_details values(NULL,'$sender','$receiver','$amt')";
        $result = mysqli_query($conn,$q);
        if($result){
            echo "<script>alert('Money Transferred successfully');
            window.location = 'history.php';</script>";
            
        }
        else{
            echo"<script>alert('Money not transferred, try again');</script>";
        }
    }
    $nb1=0;
    $nb2=0;
    $amt=0;
    
    
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
            <h1>Transfer</h1>
            <hr>
            <label for="sender"><strong>Sender: </strong></label>
            <input type="text" name="sender" required autocomplete="FALSE" />

            <label for="receiver"><strong>Receiver: </strong></label>
            <input type="text" name="receiver" required autocomplete="FALSE"/>

            <label for="amount"><strong>Amount (in $): </strong></label>
            <input type="number" name="amount" required autocomplete="FALSE"/>

            <input name="submit" type="submit" value="Transfer >" class="btn"/> 
        </div>



    </form>


    <div class="footer">Copyright &copy; Gringotts Bank Pvt Ltd.</div>
</body>
</html>