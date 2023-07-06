<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="buyVehicle.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Buy Vehicle - Tesla</title>
</head>
<body>
    <div class="navbar">

        <div class="navbar-left">
            <a href="index.php"><img src="./img/name-logo-2.png " ></img></a>
        </div>

        <div class="navbar-right">
            <ul>
            <li><a href="cyber_truck.php">Cyber Truck</a></li>
                <li><a href="inventory.php">Inventory</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </div>

    </div>
    
    
    <!-- $_SESSION['teslaIMG'] = $data['picture1'];
                $_SESSION['teslaMDL'] = $data['model'];
                $_SESSION['teslaPRC'] =$data["price"];
                $_SESSION['teslaSPD'] =$data["speed"]; -->

    <div class="header">
        <h2 id="headTag">Continue Order Request</h2>
    </div>

    <?php

    echo '<div class="content">
        <div class="left">
            <img src="img/inventory/14.png">
        </div>
        <div class="right">
        
            <form method="POST" action="orderform.php">
            <h2 class="h2">Order Now</h2>
            <div class="inputs">
                <input required type="text" placeholder="Enter Your Name" name="name">
                <input required type="email" placeholder="Enter Email" name="email">
                <input required type="text" placeholder="Enter Phone " name="phone">
                <select  required name="country">
                    <option selected>--</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="pakistan">Pakisatn</option>
                    <option value="china">China</option>
                </select>
                <input type="submit" onclick="change()" value="Experience Tesla" class="submit">
            </div>
            </form>

            <script> 
                function change(){
                    document.getElementById("headTag").innerHTML = "Kindly Fill all the Fields!";
                }
                </script>
        </div>
    </div>';

    ?>
</body>
</html>