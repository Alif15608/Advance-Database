<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <title>PLSQL</title>
</head>
<body>
<?php

include "../controller/ProcedureCheck.php";


include '../view/Header.php';
?>
<div class="title">
    <h1>Procedure and Function</h1>
</div>

<!-- 1st -->
<div class="heading-table">
    <p>1. Add new Employee & existing Admin  into Employee Table</p>
</div>
<div class="info">
   
<form action="" method="POST" name="form1" >
    <label for="empId">Employee ID: </label>
    <input type="text" id="empId" name="empId" requird>

    <label for="empName">Employee Name: </label>
    <input type="text" id="empName" name="empName" requird>

    <label for="add">Address: </label>
    <input type="text" id="add" name="add" requird>

    <label for="phn">Phn No.: </label>
    <input type="text" id="phn" name="phn" requird>
    
    <label for="email">Email: </label>
    <input type="text" id="email" name="email" required>

    <label for="aId">Admin ID: </label>
    <input type="text" id="aId" name="aId" requird>

    <label for="un">Username: </label>
    <input type="text" id="un" name="un" requird>

    <label for="pass">Password: </label>
    <input type="text" id="pass" name="pass" requird>
    
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>

</div>

<!-- 2nd -->
<div class="heading-table">
    <p>2. Delete a Transaction</p>
</div>
<div class="info">
   
<form action="" method="POST"  name="form2" required>
    <label for="tid">Transaction ID: </label>
    <input type="text" id="tid" name="tid">
   
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>

</div>

<!-- 3rd -->
<div class="heading-table">
    <p>3. Replacing Admin Email to a existing admin account </p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <table>
        <tr>
            <td><label for="aid">Admin ID: </label></td>
            <td><input type="text" id="aid" name="aid" required> </td>
        </tr>
        
        <tr>
            <td><label for="email">New Email: </label>  </td>
            <td><input type="text" id="email" name="email" required>  </td>
        </tr>
        <tr></tr>

        <tr>
            <td colspan="2"><label for="budg"> <input class="submit" type="submit" id="submit3" name="submit3" value="Submit"></label> </td>
        </tr>

    </table>
    
   
</form>

</div>
<div class="heading-table">
    <p>4. Adding New row in item cate table </p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <table>
        <tr>
            <td><label for="bid"> Item ID: </label></td>
            <td><input type="text" id="pmi" name="pmi" required> </td>
        </tr>
        
        <tr>
            <td><label for="pname">Category ID: </label>  </td>
            <td><input type="text" id="pmn" name="pmn" required>  </td>
        </tr>
        <tr></tr>

        <tr>
            <td colspan="2"><label for="budg"> <input class="submit" type="submit" id="submit4" name="submit4" value="Submit"></label> </td>
        </tr>

    </table>
    
   
</form>

</div>
<div class="heading-table">
    <p>5. Update Admin Password. </p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <table>
        <tr>
            <td><label for="bid">Admin ID: </label></td>
            <td><input type="text" id="ai" name="ai" required> </td>
        </tr>
        
        <tr>
            <td><label for="pname">New Password: </label>  </td>
            <td><input type="text" id="uap" name="uap" required>  </td>
        </tr>
        <tr></tr>

        <tr>
            <td colspan="2"><label for="budg"> <input class="submit" type="submit" id="submit5" name="submit5" value="Submit"></label> </td>
        </tr>

    </table>
    
   
</form>

</div>
<div class="heading-table">
    <p>6. Remove an item. </p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <table>
        <tr>
            <td><label for="bid">Item ID: </label></td>
            <td><input type="text" id="Rp" name="Rp" required> </td>
        </tr>
        <tr></tr>

        <tr>
            <td colspan="2"><label for="budg"> <input class="submit" type="submit" id="submit6" name="submit6" value="Submit"></label> </td>
        </tr>

    </table>
    
   
</form>

</div>
</body>
</html>