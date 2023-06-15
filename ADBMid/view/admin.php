<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("Location: ./signin.php");
    }
    require "../model/connectDB.php";
    $conn = connect();
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

<h3 align="center">Admin Information</h3>
        <div align='center'>
        <table>
                <tr>
                    <td>
                        <label for="name">Name </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $_SESSION['name']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="id">ID </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $_SESSION['id']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="password">Password </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $_SESSION['password']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
            </table>
        </div>


                   
    </body>
</html>