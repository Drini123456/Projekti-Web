<?php
        $conn = mysqli_connect("localhost", "root", "", "db");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['subject'])){
        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
       $country = $_REQUEST['country'];
        $subject = $_REQUEST['subject'];
        $sql = "INSERT INTO kontakti(firstname, lastname, country, subject)  VALUES ('$firstname', 
            '$lastname','$country','$subject')";
    
        if(mysqli_query($conn, $sql)){
            echo "<h3>Mesazhi u dergua me sukses! 
                </h3>"; 

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }else {
        echo "All fields are required";
    }
        mysqli_close($conn);
        ?>