<?php
    session_start();

    $con = mysqli_connect("localhost", "root","","tesla");

    if($con){

        $model = $_POST['name'];
        $speed = $_POST['speed'];
        $price = $_POST['price'];
        $picture1 = $_FILES['picture1'];
        $picture2 = $_FILES['picture2'];
        $picture3 = $_FILES['picture3'];
        $details = $_POST['description'];

        $picture1_name = $picture1['name'];
        $temp1_name = $picture1['tmp_name'];

        $picture2_name = $picture2['name'];
        $temp2_name = $picture2['tmp_name'];

        $picture3_name = $picture3['name'];
        $temp3_name = $picture3['tmp_name'];


        $destination1 = "file/post/".$picture1_name;
        move_uploaded_file($temp1_name, $destination1);

        $destination2 = "file/post/".$picture2_name;
        move_uploaded_file($temp2_name, $destination2);

        $destination3 = "file/post/".$picture3_name;
        move_uploaded_file($temp3_name, $destination3);

        $query = "INSERT INTO webpost(model, price, speed, picture1, picture2, picture3,details) 
                VALUES ('$model', '$price','$speed','$destination1','$destination2','$destination3','$details')";
        $q = mysqli_query($con, $query);

        if($q){
            header("Location:adminPost.php");
        }
        else{
            echo "Unable To Post To Website !";
        }
    }
    else{
        echo " Connection Unsuccessfull !";
    }
?>