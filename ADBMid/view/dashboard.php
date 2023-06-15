<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("Location: ./signin.php");
    }
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
    <?php
include '../View/Header.php';
?>
    <h1>Admin Panel</h1>
    <br>
   <h2 style="text-align: center">Welcome <?php echo $_SESSION['name']; ?> to Super Shop</h2>
   <div class="d-flex flex-column">
   <button class="btn btn-outline-success" onclick="window.location.href='../controller/dAction.php'">Dashboard</button><br>
   <button class="btn btn-outline-success" onclick="window.location.href='admin.php'">Profile</button><br>
   <button class="btn btn-outline-success" onclick="window.location.href='customer.php'">Customer</button><br>
   <button class="btn btn-outline-success" onclick="window.location.href='Employee.php'">Employee</button><br>
   <button class="btn btn-outline-success" onclick="window.location.href='Importer.php'">Importer</button><br>
</div>
</body>
</html>