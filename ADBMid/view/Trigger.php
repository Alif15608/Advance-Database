<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    
    <title>Trigger</title>
</head>
<body>
<?php

include '../view/Header.php';
include '../model/TriggerModel.php';
?>
<div class="title">
    <h1>Trigger</h1>
</div>
<div class="heading-table">
    <p>1. Insert a negative value of price to check trigger</p>
</div>
<div class="info">
<form action="../controller/TriggerCheck.php" method="POST"  name="form1" >
    <table> 
        <tr>
            <td><label for="rpid">Item ID: </label></td>
            <td><input type="text" id="rpid" name="rpid" ></td>
            <td></td><td></td>
            <td> <label for="budget">Add a Negative Value: </label></td>
            <td><input type="text" id="budget" name="budget" ></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"><input class="submit" type="submit" id="submit1" name="submit1" value="Submit"></td></tr>
    </table>
</form>
<br><br>
</div>


<div class="heading-table">
    <p>2. Update Admin's Email</p>
</div>
<div class="info">
   
<form action="../controller/TriggerCheck.php" method="POST" name="form2" >
    <table> 
        <tr>
            <td><label for="aid">Admin ID: </label></td>
            <td><input type="text" id="aid" name="aid" required></td>
            <td> </td><td> </td>
            <td> <label for="email">New Email: </label></td>
            <td><input type="text" id="email" name="email" required></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"> <input class="submit" type="submit" id="submit2" name="submit2" value="Submit"></td></tr>
        
    </table>
    <br><br>
</form>
</div>
<div class="heading-table">
    <p>3. Change Customer Password</p>
</div>
<div class="info">
   
<form action="../controller/TriggerCheck.php" method="POST" name="form2" >
    <table> 
        <tr>
            <td><label for="bid">Customer ID: </label></td>
            <td><input type="text" id="bid" name="bid" required></td>
            <td> </td><td> </td>
            <td> <label for="mbln">New Password: </label></td>
            <td><input type="text" id="mbln" name="mbln" required></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"> <input class="submit" type="submit" id="submit3" name="submit3" value="Submit"></td></tr>
        
    </table>
    <br><br>
</form>
</div>
</body>
</html>