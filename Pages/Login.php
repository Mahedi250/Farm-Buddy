<?php

require "../php/Dbcon.php";

  session_start();

  $uName = $uPass = $uPassInDB = "";
  $usertype= "";
  $emp_id= "";
  $client_id= "";
  $man_id= "";

  $uNameErr = '';
  $uPassErr = "";

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST['uname'])){
      $uNameErr = "Username cant empty!";
    }else{
      $uName = $_POST['uname'];
    }

    if(empty($_POST['pwd'])){
      $uPassErr = "Password cant empty!";
    }else{
      $uPass = $_POST['pwd'];
    }

    if(!empty($uName) && !empty($uPass)){
     
     $db = new DataAccess();
     $sql="SELECT * FROM `credentials` WHERE username='$uName';";
        $result=$db->GetData($sql);
     
      $userCount = mysqli_num_rows($result);
     

      if($userCount < 1){
        $uNameErr = "User does not exist";
      }else{
        while($row = mysqli_fetch_assoc($result)){
          
          $uPassInDB=$row['Password'];  
          $usertype= $row['User_type'];
         $emp_id = $row['emp_id'];
         $client_id= $row['client_id'];
         $man_id= $row['man_id'];
         $activity= $row['activity'];
         


        
         

        }

        if($uPassInDB==$uPass){

          if($activity!=0){
          $_SESSION["username"]=$uName;
         

          if($usertype==1){

            $_SESSION["id"] =$emp_id;

            header("Location:Admin1.php");

          }
         
         else if($usertype==2){

            $_SESSION["id"] =$client_id;



          }

          else if($usertype==3){

            $_SESSION["id"] =$man_id;



          }
         
        }

        else{
          $uPassErr = "you are not allowed";

        }
        
        
        }else{
          $uPassErr = "Wrong password!";
        }
      }
    }
  }







?>








<!DOCTYPE html>
<html lang="en">
 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>

    <link rel="icon" href="https://i.ibb.co/4tctjG9/farm-buddy-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/login.css">
    

</head>

<body>
  



   
   <div id="container">
      
   
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <div id="loginbox">


      <a href="../index.html"><img src="https://i.ibb.co/WsDsxtR/farm-buddy-black.png" alt="Farm Buddy" height="120" style="padding-bottom: 10%; "> </a> 

        <div class="input-group-prepend" style="width: 250px">

            <span class="input-group-text" id="basic-addon1"><img src="https://i.ibb.co/DLTbMF8/user.png" height="15" /></span>
            <input type="text" name="uname" class="form-control" placeholder='<?php echo $uNameErr ?>'   aria-describedby="basic-addon1"> <br>
           
        </div>


        <div class="input-group-prepend" style="width: 250px">

            <span class="input-group-text" id="basic-addon1"><img src="https://i.ibb.co/9vC9PqW/pass.png" height="15" /></span>
            <input type="password"name="pwd" class="form-control" placeholder='<?php echo $uPassErr  ?>'  aria-label="Password" aria-describedby="basic-addon1">
          
        </div>





        <div style="margin-left:5px"><input style=" width: 150px" type="submit" value="Login" class="btn btn-secondary"></input></div>


    

        <a href="#">Having trouble to Log in / Forget Password?</a>
       

        </div>


        </form>

    </div>

   <! --reg -->

<div class="popup" id="popup" id="close">
        
        <div class="popup-con">
          <i class="fa fa-times close" id="close"aria-hidden="true"></i>  
         </div>
        
        
        
    </div>
    

 <! --reg end -->

       
       
       
   </div>
  

   








   

 <! -- Js start-->


                                <! -- Js end -->


</body>

</html>
