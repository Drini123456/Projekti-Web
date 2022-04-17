<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'db');

	// initialize variables
	$username = "";
	$email = "";
    $password = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];

		mysqli_query($db, "INSERT INTO akonti (username, email, password) VALUES ('$username', '$email','$password')"); 
		$_SESSION['message'] = "Account saved"; 
		header('location: index.php');
        
	}
    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        mysqli_query($db, "UPDATE akonti SET username='$username', email='$email', password='$password' WHERE id=$id");
        $_SESSION['message'] = "Account updated!"; 
        header('location: index.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM akonti WHERE id=$id");
        $_SESSION['message'] = "Account deleted!"; 
        header('location: index.php');
    }