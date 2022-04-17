<?php  include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
        $update= true;
		$rec= mysqli_query($db, "SELECT * FROM akonti WHERE id=$id");
        $record =mysqli_fetch_array($rec);
			$username = $record['username'];
			$email = $record['email'];
            $password = $record['password'];
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM akonti"); ?>

<table>
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
            <th>Password</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
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
        <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
</body>
</html>