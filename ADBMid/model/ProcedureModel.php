<?php
include '../model/connectDB.php';
function plsqldb1($empId, $empName, $add, $phn, $email, $aId, $un, $pass){

    $conn = connect();
    $sql = 'BEGIN newemp(:empId, :empName, :add, :phn, :email, :aId, :un, :pass); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':empId',$empId,32);
    oci_bind_by_name($stmt,':empName',$empName,32);
    oci_bind_by_name($stmt,':add',$add,32);
    oci_bind_by_name($stmt,':phn',$phn,32);
    oci_bind_by_name($stmt,':email',$email,32);
    oci_bind_by_name($stmt,':aId',$aId,32);
    oci_bind_by_name($stmt,':un',$un,32);
    oci_bind_by_name($stmt,':pass',$pass,32);
    return oci_execute($stmt);
    
}

function plsqldb2($tid){

    $conn = connect();
    $sql = 'BEGIN deltrans(:tid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':tid',$tid,32);
    return oci_execute($stmt);
    
}
function plsqldb3($aid,$email){

    $conn = connect();
    $sql = 'BEGIN newadd(:aid,:email); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':aid',$aid,32);
    oci_bind_by_name($stmt,':email',$email,32);
    return oci_execute($stmt);
    
}
function plsqldb4($pmi,$pmn){

    $conn = connect();
    $sql = 'BEGIN my_procedure(:pmi, :pmn); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':pmi',$pmi,32);
    oci_bind_by_name($stmt,':pmn',$pmn,32);
    return oci_execute($stmt);
    
}
function plsqldb5($ai,$uap){

    $conn = connect();
    $sql = 'BEGIN adpass(:ai, :uap); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':ai',$ai,32);
    oci_bind_by_name($stmt,':uap',$uap,32);
    return oci_execute($stmt);
    
}
function plsqldb6($Rp){

    $conn = connect();
    $sql = 'BEGIN delitem(:Rp); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':Rp',$Rp,32);
    return oci_execute($stmt);
    
}
?>