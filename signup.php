<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Account - Tesla</title>
</head>
<body>
    <div class="navbar">

        <div class="navbar-left">
            <a href="index.html"><img src="./img/name-logo-2.png " ></img></a>
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

    <div class="container">
        <!-- <div class="bar"></div> -->

        <form action="ls-process.php" method="POST" enctype="multipart/form-data">
            <div class="heading">
            <h1>Sign Up</h1>
            </div>
            <div class="form-section">
                <!--  ---------------------------------------------------------------- -->
                <div class="left-form">
                    <div class="group">
                        <label for="name" >Enter Full Name </label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="group">
                        <label for="email" >Email </label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="group">
                        <label for="pass" >Password </label>
                        <input type="password" id="pass" name="pass" required>
                    </div>
                    <div class="country">
                    <div>Country</div>
                    <select id="country" name="country" >
                        <option >--</option>
                        <option value="United States">United States</option>
                        <option value="Canada">Canada</option>
                        <option value="Australia">Australia</option>
                        <option value="China">China</option>
                    </select>
                    </div>
                </div>
                <!--  ---------------------------------------------------------------- -->
                <div class="right-form">
                    <div class="rgroup">
                        <label for="phone" >Phone Number</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="rgroup">
                        <label for="ownTesla" >Do you Own Tesla Vehicle ?  </label>
                        <div class="radio-section">
                            Yes <input type="radio" value="Yes" name="ownTesla" required>
                            No <input type="radio" value="No" name="ownTesla" required>
                        </div>
                    </div>
                    <hr><br>
                    <div class="rgroup">
                        <label for="check">Vehicle You Own : </label>
                        <div class="check-section" required>
                            Honda <input type="checkbox" value="honda" name="vehicles[]" >
                            Farrari <input type="checkbox" value="farrari" name="vehicles[]">
                            Mercedese <input type="checkbox" value="mercedese" name="vehicles[]">
                            others <input type="checkbox" value="others" name="vehicles[]">
                        </div>
                    </div>
                    <hr><br>
                    <div class="file-upload">
                        <label for="file">Photos Of Legal ID : </label>
                        <input type="file" name="file" required>
                    </div>
                </div>
                <!--  ---------------------------------------------------------------- -->
            </div>
            <div class="submit">
                <a href="login.php">Already have an account ? </a>
                <input type="submit" name="subs" value="Sign Up">
            </div>
        </form>
    </div>

</body>
</html>