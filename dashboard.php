<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Cars, Solar and Clean Energy</title>
    <link href="dashboard.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
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
    <!-- text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif; padding-top: 10px; -->
    <!-- <h1 style="">Dashboard</h1> -->
    <div class="account-cont">
        
            <div class="acc-sidebar">
                <div class="box">
                    <div class="acc-img">
                        <img src="img/account-icon.png" width="120px" style="filter:invert(100%);" ></img>
                    </div>
                    <div class="account-heading">
                        <?php echo "<h1>Welcome, ".$_SESSION['session_name']."</h1>"; 
                                echo "<br>";
                                if($_SESSION['session_country'] == 'United States'){
                                    echo "US &nbsp<img src='img/us.png' ></img>" ;
                                }
                                else if($_SESSION['session_country'] == 'Canada'){
                                    echo "CA &nbsp<img src='img/canada.png' ></img>" ;
                                }
                                else if($_SESSION['session_country'] == 'Australia'){
                                    echo "AUS &nbsp<img src='img/australia.png' ></img>" ;
                                }
                                else if($_SESSION['session_country'] == 'China'){
                                    echo "CHN &nbsp<img src='img/china.png' ></img>" ;
                                }
                        ?>
                    </div>
                    <div class="footer">
                        <a href="account.php" onclick="session_out()">Logout</a>
                        <script>
                            function session_out(){
                                <?php
                                    //session_unset()  removes all session variables
                                    session_unset();
                                    //session_destroy() destroys the session
                                    session_destroy();
                                ?>
                            }
                        </script>
                    </div>
                </div>
        </div>



        <div class="acc-box">
            
        </div>
    </div>

</body>
</html>
