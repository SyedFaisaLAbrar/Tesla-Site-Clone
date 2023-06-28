<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="contact_us.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Contact Us - Tesla</title>
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
        <h1 style="text-align: center; padding-bottom: 20px;">Contact Us</h1>
        <form action="contactus.php" method="POST">
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Country</label>
          </div>
          <div class="col-75">
            <select id="country" name="country">
              <option>---</option>
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Message</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; font-family: Verdana, Geneva, Tahoma, sans-serif"></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
        </form>
      </div>
      <div class="footer">
        
            <div class="list">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Term And Conditions</a></li>
                    <li>Tesla 2023 &copy;</li>
                </ul>
            </div>
    </div>

</body>
</html>