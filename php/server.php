<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'db');

	// initialize variables
	$username = "";
	$email = "";
    $password = "";
    $usertype = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

		mysqli_query($db, "INSERT INTO akonti (username, email, password, usertype) VALUES ('$username', '$email','$password','$usertype')"); 
		$_SESSION['message'] = "Account saved"; 
		header('location: adminhome.php');
        
	}
    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        $id = $_POST['id'];
        
        mysqli_query($db, "UPDATE akonti SET username='$username', email='$email', password='$password', usertype='$usertype' WHERE id=$id");
        $_SESSION['message'] = "Account updated!"; 
        header('location: adminhome.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM akonti WHERE id=$id");
        $_SESSION['message'] = "Account deleted!"; 
        header('location: adminhome.php');
    }