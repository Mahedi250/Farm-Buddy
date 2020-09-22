<?php

use function PHPSTORM_META\type;

require "Dbcon.php";

$sql1="";
$sql2="";
$sql3="";
$sql4="";
$system=0;
$remove=0;
$id='';
$u_type='';
$db=0;
 if($_SERVER["REQUEST_METHOD"]=="POST"&& $_POST['u_type']==1){

  $id=$_POST['id'];
  $u_type=$_POST['u_type'];
  if($remove==0){

   $remove=$_POST['remove'];

  }


 

    $db= new DataAccess ();



    if($remove==3){


        $sql4="DELETE FROM `temp_admin` WHERE a_id=$id";

        $res2=$db->ExecuteQuery($sql3);
        if($res2>1){

            echo 1;
        }



    }else{




        $sql1="select username,password from temp_admin where a_id=$id";
        $res=$db->GetData($sql1);
        
        while($row = mysqli_fetch_assoc($res)){
    
    
           $username= $row['username'];
           $password=$row['password'];
           
            $sql2="INSERT INTO `credentials`( `Username`, `Password`, `User_type`,`emp_id`, `client_id`, `man_id`) VALUES
             ('$username','$password',$u_type,'$id',null,null)";
    
    
        }
        $res1=$db->ExecuteQuery($sql2);
    
        $sql3="UPDATE temp_admin SET activity=1 WHERE a_id='$id'";
    
        $res2=$db->ExecuteQuery($sql3);
    
    
        if($res1==$res2){
    
          echo 1;
    
    
        }



    }








 



}



if($_SERVER["REQUEST_METHOD"]=="POST"&& $_POST['u_type']==2){


  $id=$_POST['id'];
  $u_type=$_POST['u_type'];
  if(!empty($_POST['remove'])){

   $remove=$_POST['remove'];

  }

 


 

  $db= new DataAccess();









  if($remove==3)
  {
    $db= new DataAccess ();

    $delete_sql="DELETE FROM `client_temp` WHERE Com_id=$id";
    
    $res=$db->ExecuteQuery($delete_sql);

    echo $id;

    echo $u_type;
    echo $remove;

    
   }


    else{


      $sql1="select username,password,m_system from client_temp where Com_id=$id";
      $res=$db->GetData($sql1);
      
      while($row = mysqli_fetch_assoc($res)){
  
  
         $username= $row['Username'];
         $password=$row['password'];
         $system=$row['m_system'];
         
          $sql2="INSERT INTO `credentials`( `Username`, `Password`, `User_type`,`emp_id`, `client_id`, `man_id`) VALUES
           ('$username','$password',$u_type,null,'$id',null)";
  
  
      }
      $res1=$db->ExecuteQuery($sql2);
  
      $sql3="UPDATE client_temp SET activity=1 WHERE Com_id='$id'";
    
      $res2=$db->ExecuteQuery($sql3);
      echo $system;
      echo gettype($system);

     if($system==12){

      for($i=1;$i<3;$i++)
      {
          
        $sql = "INSERT INTO com_system (`com_id`, `system_id`) VALUES ('$id','$i')";

  
         $res2=$db->ExecuteQuery($sql);
  
      }




     }
     
     $sql = "INSERT INTO com_system (`com_id`, `system_id`) VALUES ('$id','$system')";

        $res2=$db->ExecuteQuery($sql);




     






    } 


}




















?>