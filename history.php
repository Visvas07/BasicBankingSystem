<?php
require('db.php');
mysqli_select_db($conn,"sparks");
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
    <?php 
        $q = "Select * from transaction_details";
        $result = mysqli_query($conn,$q);

    ?>
    <h2 class="list-title">Transaction History</h2>
    <table>
        
        <tr>
            <th>ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </tr>
        <?php while($rows=mysqli_fetch_assoc($result)){  ?>
            <tr>
                <td><?php echo $rows['TID'] ?></td>
                <td><?php echo $rows['Sender'] ?></td>
                <td><?php echo $rows['Receiver'] ?></td>
                <td><?php echo $rows['Amount'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <button class="tbtn" value="transfer"><a style="text-decoration: none;color:white;" href="transfer.php">Transfer Money <i class="fa fa-angle-right"></i></a></button><br>

    <div class="footer">Copyright &copy; Gringotts Bank Pvt Ltd.</div>
</body>
</html>