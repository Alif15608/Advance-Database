<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<h1><a style="text-decoration: none;" href="../home.html">Customer LogIn</a></h1>
	<?php
        if (isset($_COOKIE['msg'])) {
            echo $_COOKIE['msg'];
        }
    ?>
    <br>
	<form action="../controller/loginController.php" method="POST">
		<fieldset>
			
			<label for="username">Username</label><br>
			<input type="text" name="username">
			<br><br>
			<label for="password">Password</label><br>
			<input type="password" name="password">
			<br><br>
			<input type="submit" name="submit" id="submit-btn" value="Log in">
			
		</fieldset>
	</form>
</body>
</html>