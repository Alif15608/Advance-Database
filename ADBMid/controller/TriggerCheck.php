<?php
include '../model/TriggerModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if (isset($_POST['submit1'])) {
    $rpid = $budget = "";
    
        $rpid = input_data($_POST['rpid']);
        $budget = input_data($_POST['budget']);
        $res = trigger1($rpid,$budget);
        if($res){
            echo "Trigger Mission Failed";
        }
        else{
            echo"Trigger Mission Done";
        }
    }

if (isset($_POST['submit2'])) {

    $aid = $email = "";
   
        $aid = input_data($_POST['aid']);
        $email = input_data($_POST['email']);
        $res = trigger2($aid,$email);
        if($res){
            echo "Trigger mission done";
        }
        else{
            echo"Trigger mission failed";
        }
    }

    if (isset($_POST['submit3'])) {
   
        $bid = $mbln = "";
   
        $bid = input_data($_POST['bid']);
        $mbln= input_data($_POST['mbln']);
        $res = trigger3($bid,$mbln);
        if($res){
            echo "Trigger mission done";
        }
        else{
            echo"Trigger mission failed";
        }
        
    }
?>