<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Log In - Tesla</title>
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
        
        <form action="ls-process.php" method="POST">
            <div class="heading">
            <h1>Sign In</h1>
            </div>
            <div class="group">
                <label for="email" >Email </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="group">
                <label for="pass" >Password </label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <a href="signup.php">Don't have an account ? </a>
            <input onclick="check()" type="submit" name="subl" value="Sign In">
            <p id="error" style="font-family: Verdana, Geneva, Tahoma, sans-serif; 
            color: rgb(224, 0, 0); padding-top: 10px; font-size: small;"></p>
        </form>
    </div>

    <script>
        function check(){
            let ex = document.getElementById('email').value;
            let en = document.getElementById('pass').value;
            if(ex=="" || en==""){
                document.getElementById('error').innerHTML = "Fill In All Credientals Before Proceeding";
            }
        }
    </script>

</body>
</html>