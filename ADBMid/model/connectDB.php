<?php
	function connect() {
		$db_username = "hr";
		$db_password = "hr";
		$connection_string="xe";
		$conn=oci_connect($db_username, $db_password, $connection_string);

		if($conn)
			return $conn;

		else
		{
			die("Data base Connection failed");
		}
	}
?>