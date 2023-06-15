<?php
	require "../model/connectDB.php";
	session_start();  

    $conn = connect();

	if($conn)
	{
		if(isset($_POST['submit']))
		{
			if(isset($_POST['username']) && isset($_POST['password']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM ADMIN WHERE USER_NAME = '$username' AND PASSWORD = '$password'";
				$result = oci_parse($conn, $query);
				oci_execute($result);
				$row = oci_fetch_array($result, OCI_BOTH);
				$num_rows = oci_num_rows($result);
				if($num_rows == 1)
				{
					$_SESSION['name'] = $row['USER_NAME'];
					$_SESSION['id'] = $row['ADMIN_ID'];
					$_SESSION['password'] = $row['PASSWORD'];
                    header("location: ../view/dashboard.php");
				}
				else
				{
					setcookie('msg', "<div class='alert'>Username or Password incorrect❗</div>", time() + 1, '/');
                    header("location: ../view/signin.php");
				}
			}
			else
			{
				setcookie('msg', "<div class='alert'>Please enter username and password❗</div>", time() + 1, '/');
                header("location: ../view/signin.php");
			}

			echo "<br><br>";
		}
	}
	else
	{
		setcookie('msg', "<div class='alert'>Connection Failed!</div>", time() + 1, '/');
        header("location: ../view/signin.php");
	}	
?>