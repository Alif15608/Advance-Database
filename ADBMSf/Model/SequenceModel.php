<?php
include'../Model/DBConn.php';
function Category($cname){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO CATEGORY(C_ID, C_NAME) VALUES('CA'||seq_category.nextval,'$cname')") ;
    $res = oci_execute($sql);
    return $res;
}
function Payment_Method($pMethod){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO PAYMENT_METHOD(PM_ID, PM_NAME) VALUES('PM'||seq_pMethod.nextval,'$pMethod')") ;
    $res = oci_execute($sql);
    return $res;
}


?>