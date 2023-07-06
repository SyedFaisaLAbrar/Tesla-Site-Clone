<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <link href="account.css" rel="stylesheet">
    <title>Account</title>
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

    <div class="account-cont">
        
            <div class="acc-sidebar">
                <div class="box">
                    <div class="acc-img">
                        <img src="img/account-icon.png" width="120px" style="filter:invert(100%);" ></img>
                    </div>
                    <div class="account-heading">
                        <h1>Account</h1>
                    </div>
                    <div class="footer">
                        <a href="login.php">LOGIN</a>
                        <a href="signup.php">SIGNUP</a>
                        
                    </div>
                    <div class="admin">
                        <a href="adminLogin.php" target="_blank">Admin</a>
                    </div>
                </div>
        </div>



        <div class="acc-box">
            
        </div>
    </div>

</body>
</html>