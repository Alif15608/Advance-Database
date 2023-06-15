<?php
    require "../model/connectDB.php";
    $conn = connect();

	if($conn)
	{
		if(isset($_POST['submit']))
		{
            
			if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
			{
				if($_POST['id'] != "" && $_POST['name'] != "" &&  $_POST['address'] != "" && $_POST['phone'] != "" && $_POST['email'] != "" && $_POST['username'] != "" && $_POST['password'] != "")
                {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $username = $_POST ['username'];
                    $password = $_POST ['password'];
                    $c_id = 1;

                    $query = "INSERT INTO CUSTOMER VALUES ('$id', '$name', '$address', '$phone', '$email', '$username', '$password')";
                    $result = oci_parse($conn, $query);
                    oci_execute($result);
                    if($result)
                    {
                        setcookie('msg', "<div class='alert'>Registration Successful</div>", time() + 1, '/');
                        header("location: ../view/registration.php");
                    }
                    else
                    {
                        setcookie('msg', "<div class='alert'>Registration Failed ❌</div>", time() + 1, '/');
                        header("location: ../view/registration.php");
                    }
                }
                else
                {
                    setcookie('msg', "<div class='alert'>Please fill up all fields ❗</div>", time() + 1, '/');
                    header("location: ../view/registration.php");
                }
			}
			else
			{
				echo "<div class='alert'>Please fill up all the fields!</div>";
			}

			echo "<br><br>";
		}
	}
	else
	{
		echo "<div class='alert'>Connection Failed!</div>";
	}	
?>