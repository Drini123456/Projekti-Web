<?php  include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
        $update= true;
		$rec= mysqli_query($db, "SELECT * FROM akonti WHERE id=$id");
        $record =mysqli_fetch_array($rec);
			$username = $record['username'];
			$email = $record['email'];
            $password = $record['password'];
            $usertype = $record['usertype'];
		}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
       h1{
           text-align:center;
       }
       </style>
</head>
<body>    
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;TWO PAGE</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="#">Report Bug</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="border:solid;  border-width:1px ;border-color: grey;">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" /> 
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="adminhome.php"><i class="fa fa-table "></i>Admin CRUD</a>
                    </li>
                    <li>
                        <a href="ProductCRUD.php"><i class="fa fa-table "></i>Products Crud</a>
                    </li>
                </ul>
            </div>
        </nav>
        <head>
	<title>Admin Table</title>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($_SESSION['message'])): ?>
                        <div class="msg">
                            <?php 
                                echo $_SESSION['message']; 
                                unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif ?>
                    <?php $results = mysqli_query($db, "SELECT * FROM akonti"); ?>
                    <h1>THIS IS ADMIN HOME PAGE</h1><h1>Welcome <?php echo $_SESSION["username"] ?></h1>
                        <br>
                    <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Usertype</th>
                                <th colspan="4">Action</th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['usertype']; ?></td>
                                <td>
                                    <a href="adminhome.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                                </td>
                                <td>
                                    <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                        <form method="post" action="server.php" >
                            <div class="input-group">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="input-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $password; ?>">
                            </div>
                            <div class="input-group">
                                <label>Usertype</label>
                                <input type="text" name="usertype" value="<?php echo $usertype; ?>">
                            </div>
                            <div class="input-group">
                            <?php if ($update == true): ?>
                        <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                    <?php else: ?>
                        <button class="btn" type="submit" name="save" >Save</button>
                    <?php endif ?>
                            </div>
                        </form>
                        <h3><a href="logout.php">Logout</a></h3>
                    </div>
                </div>              
                  <hr />       
    </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
