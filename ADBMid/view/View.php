<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../model/ViewModel.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>1. Employee Details with Admin who Assigned the Employee: </p>
</div>
<table border="2">
    <tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Address </th>
    <th>Employee Assigned by Admin</th>
    </tr>
    <?php
    $res = view1();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <p>2. Customer's Transaction History:</p>
</div>
<table border="2">
    <tr>
    <th>Customer ID</th>
    <th>Customer Name</th>
    <th>Customer Address</th>
    <th>Customer Phn No.</th>
    <th>Email</th>
    <th>Purchase Item Name</th>
    <th>Quantity</th>
    <th>Date</th>
    </tr>
    <?php
    $res = view2();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <p>3. Category Name Which Item Price is less than 100:</p>
</div>
<table border="2">
    <tr>
    <th>Category ID</th>
    <th>Category Name</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Brand</th>
    </tr>
    <?php
    $res = view3();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>


<div class="heading-table">
    <p>4. Importer Details who is from China and Admin who assign the importer: </p>
</div>
<table border="2">
    <tr>
    <th>Importer ID</th>
    <th>Importer Name</th>
    <th>Admin ID</th>
    <th>Admin Name</th>
    <th>Importer Address</th>
    <th>Importer Email</th>
    </tr>
    <?php
    $res = view4();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
</body>
</html>