<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "tesla");
    if($con){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];
        $message = $_POST['subject'];

        $query = "INSERT INTO contact_us(fname, lname, country, message) 
        VALUES ('$firstname', '$lastname', '$country', '$message')";
        mysqli_query($con, $query);

        header("Location:contact_us.html");
        echo "<html>
            <script>alert(Message Sent Successfully !)</script>
        </html>";
    }
?>
