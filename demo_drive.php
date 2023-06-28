<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="demo_drive.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Demo Drive - Tesla</title>
</head>
<body>
    <div class="navbar">

        <div class="navbar-left">
            <a href="index.php"><img src="./img/name-logo-2.png " ></img></a>
        </div>

        <div class="navbar-right">
            <ul>
            <li><a href="cyber_truck.php">Cyber Truck</a></li>
                <li><a href="inventry.php">Inventory</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </div>

    </div>

    <div class="main_content">
        <div class="image1">
            <img src="img/inventory/11.png"></img>
        </div>
        <div class="back_section">
            <div class="left"></div>
            <div class="right"></div>
        </div>
        <form action="process-demo.php" method="POST">
            <h2 class="h2">Demo Drive</h2>
            <div class="inputs">
                <input type="text" placeholder="Enter Your Name" name="name">
                <input type="email" placeholder="Enter Email" name="email">
                <input type="text" placeholder="Enter Phone " name="phone">
                <select  name="country">
                    <option selected>--</option>
                    <option value="australis">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="pakistan">Pakisatn</option>
                    <option value="china">China</option>
                </select>
                <input type="submit" value="Request Demo Drive" class="submit">
            </div>
        </form>
    </div>

</body>
</html>