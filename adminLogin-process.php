<?php

    session_start();
    $con = mysqli_connect("localhost", "root", "", "Tesla");

    if($con){
        
        // echo("Connected!");
        
        if(isset($_POST['sub'])){
            $l_email = $_POST['email'];
            $l_password = $_POST['pass'];
            
            $InQuery = "SELECT * FROM admin WHERE '$l_email'=email AND '$l_password' = password";
            $retrive = mysqli_query($con, $InQuery);
            
            if(mysqli_num_rows($retrive) > 0){
                // $record = mysqli_fetch_assoc($retrive);
                header("Location:adminPost.php");
                exit();
            }
            else{
                header("Location:adminLogin.php");
                exit();

            }
        }
    }
    else{
                echo"Error connecting to database!";
    }