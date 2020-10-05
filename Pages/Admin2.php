<?php

require "../php/Dbcon.php";

session_start();
$emp_id=$_SESSION["id"];

$poultry="poultry";
$dairy="Dairy";
$data='';
$system_opt='';

$db = new DataAccess();

$sql="SELECT * FROM client_temp WHERE  Com_id='$emp_id'";
   $result=$db->GetData($sql);

 
   while($row = mysqli_fetch_assoc($result)){
     
     
     $Fullname= $row['full name'];
    $email = $row['email'];
    $contact=$row['contact'];
    $username= $row['username'];
    $system_opt= $row['m_system'];
  
  


    

   }
   $_SESSION["owner_name"]= $Fullname;

   $sql="SELECT system_id  FROM com_system WHERE Com_id='$emp_id'";
   $result=$db->GetData($sql);

 
   while($row = mysqli_fetch_assoc($result)){
     
     $system=$row['system_id'];

   

      
if($system==1){


    $data .='<a href="poultry.php"> <div class="system-card">
    <i class="fas fa-egg"></i>   
    <label >Poultry Management system </label>
    <label >ORG-ID:'.$emp_id.'</label>
    
    
    
    </div> <a/>';
    

   
}
else{



    $data .='<a href="Dairy.php"> <div class="system-card">
    <i class="fas fa-cow"></i> 
    <label >Dairy Management system </label>
    
    <label >ORG-ID:'.$emp_id.'</label>
    
    </div> <a/>';
    

  



}



   

   



}

















?>










<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/Admin2.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

    <Header>

        <nav class="navbar navbar-expand-lg navbar-light sg-light">
            <a class="navbar-brand" href="#">Farm buddy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <i id="profile" class="fa fa-user-o fa-2x" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <i class="fa fa-wrench fa-2x" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
                    </li>
                </ul>

            </div>

        </nav>

    </Header>

    <sidebar>

        <div class="list-group" id="sidebar">
            <a id="user-req" class="list-group-item" href=""><i class="fa fa-leaf" aria-hidden="true"></i>&nbsp;M-system</a>
            <a id="Manage-user" class="list-group-item" href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Manage User</a>

        </div>

    </sidebar>



    <div id="container">


        <div id="m-user">
            <div id="man-head">
                <h3>Add Manager</h3>
            </div>

       <div class="m-data-send">

<div>
<label for="">Full-name:  <input type="text" id="m_fn" >     </label> 
<label for="">email:  <input type="text"    id="m_email" >     </label> 
<label for="">User name:  <input type="text" id="m_user" >     </label> 
<label for="">Password :  <input type="password" id="m_pass"  >     </label> 

</div>
<div id="sys-select">

<label for="">system :  <select name="" id="system-opn">

<?php

if($system_opt==12){

echo '<option value="1">Poultry Management</option>';
echo '<option value="2">dairy Management</option>';
}
else if($system_opt==1){

    echo '<option value="1">Poultry Management</option>';

    
}
else if($system_opt==2){


    echo '<option value="2">Dairy management</option>';

}


?>



</select>    </label> 

</div>

<div id="man_btn" >
<button type="button" id="man_btn" class="btn btn-success">Add Manager</button>
</div>




       </div>

       <div class="m-data-get">

         <h3>Manager DATA</h3>
         <div id="man_data">




         </div>



       </div>
            


        </div>

        <div id="u-req">

        <?php echo $data; ?>
    


        </div>





    </div>




    <div id="popup">


        <div id="popup-con">

            <i class="fa fa-times close" id="close" aria-hidden="true"></i>


            <div class="profile">

                <H1>Admin Profile</H1>

                <table>

                    <tr>


                        <td>

                            <label for="">Username : </label>

                        </td>
                        <td>

                            <?php echo $username ;  ?>

                        </td>
                    </tr>

                    <tr>


                        <td>

                            <label for="">Full name : </label>

                        </td>
                        <td>

                            <?php echo $Fullname ;  ?>

                        </td>
                    </tr>


                    <tr>


                        <td>

                            <label for="">User-Email : </label>

                        </td>
                        <td>

                            <?php  echo $email ;  ?>

                        </td>
                    </tr>


                    <tr>


                        <td>

                            <label for="">User-Conatct: </label>

                        </td>
                        <td>

                            <?php echo $contact   ?>

                        </td>
                    </tr>


                    <tr>


                        <td>

                            <label for="">Employe ID: </label>

                        </td>
                        <td>

                            <?php echo  $emp_id ;  ?>

                        </td>
                    </tr>



                </table>










            </div>




        </div>



    </div>




    <!-- Js start-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   
    


    <script src="../js/man.js"></script>

<script src="../js/awork2.js"></script>

<script src="../js/admin2.js"></script>


<script>







function SetuserActivity($cred_id,$a_staus){
         
        // $activity=document.getElementById('user_activity');
  
        
  
          if($a_staus==1){
  
              $a_staus=0;
          }
          else{
  
              $a_staus=1;
  
          }
  
         
       
         
  
  
       $parms="act_value="+$a_staus+'&cred_id='+$cred_id;
  
  
  var xhr = new XMLHttpRequest();
     
  xhr.open('POST','../php/update_activity.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send($parms);
  xhr.onload = function(){
      if(xhr.status == 200){
                 
      }else if(this.status == 404){
     
    }
  };
  
  
  
  
  
  
          }








</script>


    <!-- Js end-->

</body>

</html>