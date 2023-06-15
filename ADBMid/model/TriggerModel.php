<?php  
include '../model/connectDB.php';
 function trigger1($rpid,$budget){
    $conn = connect();
    $sql = oci_parse($conn,"update ITEM set PRICE = '$budget' where ID = '$rpid'") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger2($aid,$email){
    $conn = connect();
    $sql = oci_parse($conn,"update ADMIN set EMAIL = '$email' where ADMIN_ID = '$aid'") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger3($bid,$mbln){
   $conn = connect();
   $sql = oci_parse($conn,"update CUSTOMER set PASSWORD = '$mbln' where CUSTOMER_ID = '$bid'") ;
   $res = oci_execute($sql);
   return $res;
 }
?>