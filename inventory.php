<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="inventory.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/round-logo-t.png">
    <title>Inventry - Tesla</title>

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
    
    
    <h1>Inventory</h1>
    <div class="inventry-content">

        <div class="vehicles-sidebar">
            <div class="first-section">
                <h2>Available Paints</h2>
                <div class="colors">
                    <img src="img/paints/white.png">
                    <img src="img/paints/black.png" style="width:41px;"></img>
                    <img src="img/paints/red.png">
                    <img src="img/paints/blue.png">
                    <img src="img/paints/grey.png">
                </div>
                
                <div class="models">

                    <h2>Available Models</h2>
                    <ul>
                        <li>Model S   &nbsp;    Model X</li>
                        <li>Model 3    &nbsp; &nbsp;   Model Y</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="vehicles">
            <h2>Experience Your Dream Ride</h2>


            <div class="vehicle-items">


            <?php
                $con = mysqli_connect("localhost","root","","tesla");

                $checkingTotalPost = "SELECT * FROM webpost";
                $c = mysqli_query($con, $checkingTotalPost);


                //Required to run a loop , and post all posts from database
                $post_count = mysqli_num_rows($c);
                $counter = 1;

                //All posts will be loaded from database..............................
                while($counter <= $post_count){
                    
                    $query1 = "SELECT * FROM webpost WHERE id = '$counter' ";
                    $q = mysqli_query($con, $query1);
                    $data = mysqli_fetch_assoc($q);
                    
                    echo '<div class="box" #id="3">
                    <div class="box-head">
                        <div class="box-head-left">
                        <h3>2023 '.$data["model"].'</h3>
                        <span>'.$data["model"].' Rear-Wheel Drive</span>
                        </div>
                        <div class="box-head-right">
                            <h3>'.$data["price"].' <span>'.(intval($data["price"])+1320).'</span></h3>
                            <span>Est. Lease $399 /mo</span>

                        </div>
                    </div>
                    <div class="boxUpper">
                        <div class="slider">
                            <img id="mySlides" src='.$data["picture1"].'>
                            <img id="mySlides" src='.$data["picture2"].'>
                            <img id="mySlides" src='.$data["picture3"].'>
                            </div>
                            </div>
                            <div class="boxLower">
                            <div class="boxLower1-button">
                            
                            <button  onclick="order()" type="button" name="button">Order Now</button>
                            </div>
                            <div class="boxLower1">
                            <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                            </div>
                            <div class="attributes">
                            <h2>'.$data["speed"].'<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>
                            
                            </div>
                            <div class="attributes">
                                <h2>5.8<span>&nbsp;s</span></h2>
                                <span>0-60 mph</span>

                            </div>
                        </div>
                        
                        <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                        </div>
                        </div>
                        <div class="box-footer">
                        <p>'.$data["details"].'</p>
                    </div>
                    
                    </div>';

                        $counter++;

                    }//while loop ends
                
                ?>

            </div>
            
        </div>
    </div>
    <script>
        function order(){
            window.location.href = "buyVehicle.php";
        }
    </script>
</body>

</html>
        
        <!-- <div class="vehicle-items">

            <div class="box" #id="3">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model 3</h3>
                        <span>Model 3 Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/1.png">
                        <img id="mySlides" src="img/inventory/1.1.png">
                        <img id="mySlides" src="img/inventory/1.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="3">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model 3</h3>
                        <span>Model 3 Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/2.png">
                        <img id="mySlides" src="img/inventory/2.1.png">
                        <img id="mySlides" src="img/inventory/2.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="3">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model 3</h3>
                        <span>Model 3 Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/3.png">
                        <img id="mySlides" src="img/inventory/3.1.png">
                        <img id="mySlides" src="img/inventory/3.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="3">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model 3</h3>
                        <span>Model 3 Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/4.png">
                        <img id="mySlides" src="img/inventory/4.1.png">
                        <img id="mySlides" src="img/inventory/4.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div >
            <div class="box" #id="3">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model 3</h3>
                        <span>Model 3 Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/5.png">
                        <img id="mySlides" src="img/inventory/5.1.png">
                        <img id="mySlides" src="img/inventory/5.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="Y">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model Y</h3>
                        <span>Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$41,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/6.png">
                        <img id="mySlides" src="img/inventory/6.1.png">
                        <img id="mySlides" src="img/inventory/6.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>274<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.7<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="Y">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model Y</h3>
                        <span>Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$38,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/7.png">
                        <img id="mySlides" src="img/inventory/7.1.png">
                        <img id="mySlides" src="img/inventory/7.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>272<span>&nbsp;mi</span></h2>
                            <span>Range (EPA )</span>
                        </div>
                        <div class="attributes">
                            <h2>140<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.8<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="Y">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model Y</h3>
                        <span>Rear-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$35,030 <span>$40,240</span></h3>
                        <span>Est. Lease $399 /mo</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/8.png">
                        <img id="mySlides" src="img/inventory/8.1.png">
                        <img id="mySlides" src="img/inventory/8.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>270<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>135<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.6<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Paint | 18’’ Aero Wheels | All Black Partial <br>Premium Interior</p>
                </div>

            </div>
            <div class="box" #id="Y">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model Y</h3>
                        <span>Long Range All-Wheel</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$41,020 <span>$45,240</span></h3>
                        <span>Est. Transport Fee: $2,500</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/9.png">
                        <img id="mySlides" src="img/inventory/9.1.png">
                        <img id="mySlides" src="img/inventory/9.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>326<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>135<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>4.2<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Midnight Silver Metallic Paint
19’’ Gemini Wheels |
All Black Premium Interior |
Five Seat Interior</p>
                </div>

            </div>
            <div class="box" #id="Y">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model Y</h3>
                        <span>Model Y Standard Range</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$40,800 <span>$45,240</span></h3>
                        <span>Est. Transport Fee: $2,500</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/10.png">
                        <img id="mySlides" src="img/inventory/10.1.png">
                        <img id="mySlides" src="img/inventory/10.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>244<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>135<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>5.3<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Deep Blue Metallic Paint | 19’’ Gemini Wheels | 
                        All Black Premium Interior | Five Seat Interior</p>
                </div>

            </div>
            <div class="box" #id="S">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model S</h3>
                        <span>90D All-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$39,000 <span>$40,240</span></h3>
                        <span>Est. Transport Fee: $2,500</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/11.png">
                        <img id="mySlides" src="img/inventory/11.1.png">
                        <img id="mySlides" src="img/inventory/11.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>294<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>155<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>4.2<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Midnight Silver Metallic Paint |
19" Silver Slipstream Wheels
Black Premium Interior |
Smart Air Suspension |
Glass Roof</p>
                </div>

            </div>
            <div class="box" #id="S">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model S</h3>
                        <span>90D All-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$41,700 <span>$43,240</span></h3>
                        <span>Est. Transport Fee: $2,500</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/12.png">
                        <img id="mySlides" src="img/inventory/12.1.png">
                        <img id="mySlides" src="img/inventory/12.2.jpeg">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>294<span>&nbsp;mi</span></h2>
                            <span>Range (EPA est.)</span>
                        </div>
                        <div class="attributes">
                            <h2>155<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>4.2<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Red Multi-Coat Paint | 19" Silver Slipstream Wheels | Cream Premium Interior
                        Smart Air Suspension | Glass Roof</p>
                </div>

            </div>
            <div class="box" #id="S">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model X</h3>
                        <span>75D All-Wheel Drive</span>
                    </div>
                    <div class="box-head-right">
                        <h3>$49,400<span>$52,240</span></h3>
                        <span>Est. Transport Fee: $500</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/13.png">
                        <img id="mySlides" src="img/inventory/13.1.png">
                        
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>237<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>130<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>4.9<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Midnight Silver Metallic Paint | 20" Silver Wheels | Black 
                        <BR>Textile Interior | Full Self-Driving Capability Smart Air Suspensio</p>
                </div>

            </div>
            <div class="box" #id="S">
                <div class="box-head">
                    <div class="box-head-left">
                        <h3>2023 Model X</h3>
                        <span>75D All-Wheel Drive </span>
                    </div>
                    <div class="box-head-right">
                        <h3>$52,600 <span>$60,240</span></h3>
                        <span>Est. Transport Fee: $1,000</span>

                    </div>
                </div>
                <div class="boxUpper">
                    <div class="slider">
                        <img id="mySlides" src="img/inventory/14.png">
                        <img id="mySlides" src="img/inventory/14.1.png">
                        <img id="mySlides" src="img/inventory/14.2.png">
                    </div>
                </div>
                <div class="boxLower">
                    <div class="boxLower1-button">
                        
                        <button  onclick="checkUser()" type="button" name="button">Order Now</button>
                    </div>
                    <div class="boxLower1">
                        <div class="attributes">
                            <h2>255<span>&nbsp;mi</span></h2>
                            <span>Range (EPA)</span>
                        </div>
                        <div class="attributes">
                            <h2>130<span>&nbsp;mph</span></h2>
                            <span>Top Speed</span>

                        </div>
                        <div class="attributes">
                            <h2>4.6<span>&nbsp;s</span></h2>
                            <span>0-60 mph</span>

                        </div>
                    </div>

                    <div class="boxLower2">
                        <div class="specs"></div>
                        <div class="specs"></div>
                    </div>
                </div>
                <div class="box-footer">
                    <p>Pearl White Multi-Coat Paint | 0" Silver Wheels | 
                        Cream Premium Interior with Oak Wood Décor | Five Seat Interior</p>
                </div>

            </div>

        </div> -->