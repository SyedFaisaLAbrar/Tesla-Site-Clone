<?php
    $con = mysqli_connect("localhost", "root", "", "tesla");
    if($con){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $q = "INSERT INTO orderTesla(name, email, phone, country) VALUES ('$name', '$email', '$phone', '$country')";
        mysqli_query($con, $q);
        header('Location:buyVehicle.php');

    }
?>