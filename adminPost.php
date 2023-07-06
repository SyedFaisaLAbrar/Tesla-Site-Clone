<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="adminPost.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Admin Panel - Tesla</title>

</head>

<body>

    <div class="navbar">

        <div class="navbar-left">
            <a href="index.php"><img src="./img/name-logo-2.png "></img></a>
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

    <div class="full-view">
        <div class="buttons">

            <div id="createpost" class="create">
                <a onclick="postPannel()">Add Vehicle Post</a>
            </div>
        
        </div>

        <div class="form-section">
    
            <form id="myForm" method="post" action="postVehicleToWebsite.php" enctype="multipart/form-data">
                <h2>Add Vehicle</h2>
                <div class="myForm">

                    <!-- Your form content goes here -->
                    <div class="entry">
                        <div>
                            <label>Enter Model</label>
                            <input required type="text" name="name">
                        </div>
                        &nbsp;  &nbsp;
                        <div>
                            <label>Enter Price</label>
                            <input required type="text" name="price" placeholder="$">
                        </div>
                        
                    </div>
                    <div class="entry">
                        <div>

                            <label>Enter Speed</label>
                            <input required type="text" name="speed" placeholder="mph">
                        </div>
                        &nbsp;  &nbsp;
                        <div>
                            <label>Add Description</label>
                            <input required type="textarea" name="description">
                        </div>
                    </div>
                    <div>
                        <label>Upload Pictures</label>
                        
                        <div class="pictures">

                            <input required  type="file" name="picture1">
                            <input required type="file" name="picture2">
                            <input required type="file" name="picture3">
                        </div>
                    </div>

                </div>
                <div>
                    <input type="submit" value="Post To Website">
                </div>
            </form>
        
            <!-- hide form initially........................... -->
            
            <script>document.getElementById("myForm").style.display = "none";</script>
        </div>
        
        
    </div>

    <script>
        function postPannel(){  
            // Hide the button
            document.getElementById("createpost").style.display = "none";
            

            // Show the form
            document.getElementById("myForm").style.display = "block";
            
        }

    </script>
</body>

</html>
