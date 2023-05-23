<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=='Login') {
			header("location:admin.php");
		}elseif($_GET['pesan']=='Gagal'){
			echo "Username Atau Password Salah";
		}
	}
	?>	
	<h2>E-Lektronik Store</h2>
	<form action="login.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>