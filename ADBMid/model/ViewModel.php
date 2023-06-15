<?php
include '../model/ConnectDB.php';
function view1(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from view_adminEmp ") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from view_customerTrans ") ;
    $res = oci_execute($sql);
    return $sql;
}

function view3(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from view_itemCat ") ;
    $res = oci_execute($sql);
    return $sql;
}

function view4(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from view_importAdmin ") ;
    $res = oci_execute($sql);
    return $sql;
}
?>