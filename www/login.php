<!DOCTYPE html>

<html>

<head>
</head>

<title>Log In - BigLegCarry</title>

<body>
	<div style="text-align:center">
		<header>
			<h1>BigLegCarry</h1>
			<table border="1" align="center" width="100%">
				<tr>
					<td><a href="index.php">Home</a></td>
					<td><a href="cars.php?maker=Any&model=Any&color=Any">Cars</a></td>
					<td><a href="dealers.php">Dealers</a></td>
					<td><a href="about.php">About Us</a></td>
					<td>
						<input type="text" size="7" id="search_cars" placeholder="Type to search" style="width: 100%;box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;">
					</td>
					<td><a href="login.php">Log in / Sign up</a></td>
				</tr>
			</table>
		</header>
		<br>
		<form>
			User name:<br>
			<input type="text" name="username"><br>
			User password:<br>
			<input type="password" name="psw"><br>
			<button type="button" name="login">Log in</button>
			<button type="button" name="signup" onclick="window.location.href='signup.php'">Sign up</button>
		</form>
	</div>
</body>

<script>
</script>

</html>
