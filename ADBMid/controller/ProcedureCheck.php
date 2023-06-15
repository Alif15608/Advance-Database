<?php
include '../model/ProcedureModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

if(isset($_POST['submit1'])){
    $empId = $empName = $add = $phn = $email = $aId = $un = $pass = "";
    

        $empId = input_data($_POST['empId']);
        $empName = input_data($_POST['empName']);
        $add = input_data($_POST['add']);
        $phn = input_data($_POST['phn']);
        $email = input_data($_POST['email']);
        $aId = input_data($_POST['aId']);
        $un = input_data($_POST['un']);
        $pass = input_data($_POST['pass']);
       $res = plsqldb1($empId, $empName, $add, $phn, $email, $aId, $un, $pass);
       if($res){
           echo "Insertion Successfull!";
       }
       else{
           echo"Failed Insertion!";
       }

    }

if(isset($_POST['submit2'])){
    $tid = "";
    
        $tid = input_data($_POST['tid']);
    
       $res = plsqldb2($tid);
       if($res){
           echo "Deletion Successfull";
       }
       else{
           echo"Failed Deletion";
       }

    }

if (isset($_POST['submit3'])) {
    
    $aid=$email="";
    
        $aid = input_data($_POST['aid']);
        $email = input_data($_POST['email']);
       $res = plsqldb3($aid,$email);
       if($res)
       {
        echo "Insertion Successfull!";
       }
    else{
        echo"Failed Insertion!";
    }

    }


if (isset($_POST['submit4'])) {
    
        $pmi = $pmn = "";
    

    
        $pmi = input_data($_POST['pmi']);
        $pmn = input_data($_POST['pmn']);
       $res = plsqldb4($pmi , $pmn);
       if($res){
           echo "Insertion Successfull!";
       }
       else{
           echo"Failed Insertion!";
       }
    
        }

if (isset($_POST['submit5'])) {
    
            $ai = $uap = "";
        
    
        
            $ai = input_data($_POST['ai']);
            $uap = input_data($_POST['uap']);
           $res = plsqldb5($ai , $uap);
           if($res){
               echo "Update Successfull!";
           }
           else{
               echo"Failed Insertion!";
           }
        
            }


 if(isset($_POST['submit6'])){
                $Rp = "";
                
                    $Rp = input_data($_POST['Rp']);
                
                   $res = plsqldb6($Rp);
                   if($res){
                       echo "Deletion Successfull";
                   }
                   else{
                       echo"Failed Deletion";
                   }
            
                }

?>