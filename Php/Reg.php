<?php 
 require "Dbcon.php";
$ful_namev="";
$emailv = "";
$contactv = "";
$usernamev = "";
$passordv = "";
$rpassordv = "";
$cnamev ="";
$c_countryv ="";
$c_addv = "";
$c_liv = "";
$user_type="";
$system= '';



    if($_SERVER["REQUEST_METHOD"]=="POST"){

    

      $ful_namev= $_POST['name'];
      $emailv =$_POST['email'];
      $contactv = $_POST['conatct'];
         $usernamev = $_POST['username'];
        $passordv = $_POST['password'];
      


     if($_POST['usertype']==1){


      
        $user_type=1;

        $db= new DataAccess ();
        $sql="INSERT INTO `temp_admin`(`full_name`, `Email`, `Contact`, `username`, `password`,`user_type`,`activity`) VALUES('$ful_namev','$emailv','$contactv','$usernamev','$passordv','$user_type',0)"; 

      $res=$db->ExecuteQuery($sql);

      if($res>0){ echo "inserted"; $db->Dispose();  }
      else{ echo "failed";}



     }
     else{


        $user_type=2;

       $cnamev =$_POST['cname'];
        $c_countryv =$_POST['c_country'];
       $c_addv = $_POST['c_add'];                     
       $c_liv = $_POST['c_li'];
       $system=$_POST ['system'];
       



       $db= new DataAccess ();
       

       $sql="INSERT INTO `client_temp`(`full name`, `email`, `contact`, `username`, `password`, `c_name`, `c_country`, `c_add`, `c_li`, `user-type`,`m_system`,`activity`) VALUES('$ful_namev','$emailv','$contactv','$usernamev','$passordv','$cnamev','$c_countryv','$c_addv','$c_liv','$user_type','$system',0)"; 

     $res=$db->ExecuteQuery($sql);

     if($res>0){ echo "inserted"; $db->Dispose(); }
     else{ echo "failed";}






     }

     






       
               
      
    }

 











?>