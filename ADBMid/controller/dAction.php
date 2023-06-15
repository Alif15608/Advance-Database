<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("Location: ./signin.php");
    }
    require "../model/connectDB.php";
    $conn = connect();

    $query1 = "SELECT count(*) from CUsTOMER";
    $result1 = oci_parse($conn, $query1);
    oci_execute($result1);
    $row1 = oci_fetch_array($result1, OCI_BOTH);
    //$num_rows1 = oci_num_rows($result1);

    $query2 = "SELECT count(*) from EMPLOYEE";
    $result2 = oci_parse($conn, $query2);
    oci_execute($result2);
    $row2 = oci_fetch_array($result2, OCI_BOTH);
    //$num_rows2 = oci_num_rows($result2);

    $query3 = "SELECT count(*) from IMPORTER";
    $result3 = oci_parse($conn, $query3);
    oci_execute($result3);
    $row3 = oci_fetch_array($result3, OCI_BOTH);
    //$num_rows3 = oci_num_rows($result3);

    $query4 = "SELECT count(*) from ADMIN";
    $result4 = oci_parse($conn, $query4);
    oci_execute($result4);
    $row4 = oci_fetch_array($result4, OCI_BOTH);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Dashboard</title>
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

<legend><b>Dashboard</b></legend>


            <hr>
                <table style="margin-left: auto; margin-right: auto;">
                    <tbody>
                        <tr>
                            <td>Customer: <?php echo $row1[0]; ?> </td>
                        </tr>
                        <tr>
                            <td>Employee: <?php echo $row2[0]; ?> </td>
                        </tr>
                        <tr>
                            <td>Importer: <?php echo $row3[0]; ?> </td>
                        </tr>
                        <tr>
                            <td>Admin: <?php echo $row4[0]; ?> </td>
                           
                        </tr>
                    </tbody>
                </table>

                </body>
</html>