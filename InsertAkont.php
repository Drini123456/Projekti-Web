<?php

        $conn = mysqli_connect("localhost", "root", "", "db");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];

  
        $sql = "INSERT INTO akonti(username, email, password)  VALUES ('$username', 
            '$email','$password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully 
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