<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
	</head>
	<style>
		body{
			background:#454840;
		}
		
		table{
			background:green;
			padding:30px;
			width:500px;
			margin:auto;
			font-size:20px;
			color:white;
			font-family:CMG Sans;
		}
		input{
			width:100%;
			padding:5px;
			marhin-top:20px;
			font-size:18px;
			font-family:CMG Sans;
			border:none;
		}
		input[type=submit]{
			width:20%;
			margin-left:80px;
			background:brown;
			color:white;
			padding:10px;
			border-radius:5px;
		}
		
	</style>
<body>
	
		<form action="success.php" method="POST">
			<center>
			<h5 style="color:white"> file edited from cloned repo on local path (computer)
				<br>...then committed and fetched using Github Desktop</h5>
		<table>
			<tr>
				<th><h3 style="font-family:CMG Sans"> Registration (test)</h3></th>
			</tr>
		
			<tr>
				<td>Fullname: </td>
				<td><input type="fullname" name="fullname" placeholder="Fullname"></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><input type="address" name="address" placeholder="Address"></td>
			</tr>
			<tr>
				<td>Contact No.: </td>
				<td><input type="contact" name="contact" placeholder="Contact No."></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="email" name="email" placeholder="Email Address"></td>
			</tr>
			<tr>
				<td>Username: </td>
				<td><input type="usern" name="usern" placeholder="Username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Save"><input type="submit" value="Cancel"></td>
			</tr>
			</table>
		</form>
	
</body>
	
</html>