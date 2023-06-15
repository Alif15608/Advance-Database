<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("Location: ./signin.php");
    }
    require "../model/connectDB.php";
    $conn = connect();
    
    $s = oci_parse($conn, "select * FROM IMPORTER");
    oci_execute($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Importer</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="d-flex flex-row-reverse">
                <div class="p-2"><button class="btn btn-outline-success" onclick="window.location.href='../controller/logoutAction.php'">Log out</button></div>
            </div>
        </header>
    </div>
    <h1> <a style="text-decoration: none;"href="../view/dashboard.php" >Admin Panel </a></h1>
    <br>

        <h3 align="center">Importer Information</h3>

        <form method="POST" action="#">

 <input type="search" id="search" class="search_box" name="sea" placeholder="SEARCH BY NAME...">

 <button name="search">SEARCH</button>

 </form>

 <?php

 try {

 if (isset($_POST['search'])) {

 $conn = connect();

 $empName = $_POST['sea'];

if (!empty($empName)) {

 $sql = "select * FROM IMPORTER WHERE I_NAME='$empName'";

 $s = oci_parse($conn, $sql);

 oci_execute($s);

 } else {

 $s = oci_parse($conn, "select * FROM IMPORTER");

 oci_execute($s);

 }

 } else {

 $conn = connect();

 $s = oci_parse($conn, "select * FROM IMPORTER");

 oci_execute($s);

 }

 } catch (Exception $error) {

 $conn = connect();

 $s = oci_parse($conn, "select * FROM IMPORTER");

 oci_execute($s);

}
?>


        <div id="records" align="center">
            <table border="1" align="center">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phn No</th>
                        <th>Email</th>
                        <th>Admin-Id</th>
                        <th>Username</th>
                    </tr>
                    <?php 
                            while ($value = oci_fetch_assoc($s)) {
                                ?>
                                <tr>
                                    <td><?php echo $value['IMPORTER_ID'] ?></td>

                                    <td><?php echo $value["I_NAME"] ?></td>

                                    <td><?php echo $value['I_ADDRESS'] ?></td>
                                    
                                    <td><?php echo $value['I_PHONENUMBER'] ?></td>

                                    <td><?php echo $value["I_EMAIL"] ?></td>

                                    <td><?php echo $value["ADMIN_ID"] ?></td>

                                    <td><?php echo $value["USERNAME"] ?></td>
                                </tr>                           
                    <?php } ?>
                </tbody>
            </table>
        </div>

</body>
</html>