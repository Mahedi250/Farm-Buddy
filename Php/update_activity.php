<?php


require "Dbcon.php";





if($_SERVER["REQUEST_METHOD"]=="POST"){

    $act_value =$_POST['act_value'];
    $cred_id= $_POST['cred_id'];
    
    $sql="UPDATE credentials SET activity='$act_value' WHERE cred_id='$cred_id'";
     $db= new DataAccess ();
    
    
     
     $res2=$db->ExecuteQuery($sql);

     if($res2>1){echo "success";}
    
    
    
    
    }













?>