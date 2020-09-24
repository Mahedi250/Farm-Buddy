<?php

require "../php/Dbcon.php";

session_start();
$emp_id=$_SESSION["id"];



$db = new DataAccess();

$sql="select * from temp_admin where a_id='$emp_id'";
   $result=$db->GetData($sql);

 
   while($row = mysqli_fetch_assoc($result)){
     
     
     $Fullname= $row['full_name'];
    $email = $row['Email'];
    $contact=$row['Contact'];
    $username= $row['username'];
  


    

   }






?>










<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/Admin1.css" media="all" rel="stylesheet" type="text/css" />
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
            <a id="user-req" class="list-group-item" href=""><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; User Request</a>
            <a id="Manage-user" class="list-group-item" href=""><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Manage User</a>

        </div>

    </sidebar>



    <div id="container">


        <div id="m-user">

       <div>
        <h1>Manage user</h1>
          
             
        <div id="current_user">
            
            
            
        </div>           
           
           
           
           
       </div>

            


        </div>

        <div id="u-req">


            <div id="admin">
                <h1>Admin request</h1>
               <div id="admindata">
               



            </div>


            </div>


            <div id="clientdata">
                <h1>client Request</h1>
               <div id="client" ></div>


            </div>




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

    <script src="../js/admin1.js"></script>
    


    <script>
        var my_name = 0;


        function loadResponsePost() {

            var xhr = new XMLHttpRequest();
            var params = "n=" + my_name;
            xhr.open('POST', '../php/admindata.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    document.getElementById('admindata').innerHTML = this.responseText;
                } else if (this.status == 404) {

                }
            };
        }





        function Approveuser($id, $usertype) {
            if( confirm("Are You sure?") ){
            var xhr = new XMLHttpRequest();
            var params = "id=" + $id + '&u_type=' + $usertype;
            xhr.open('POST', '../php/approval.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            xhr.onload = function() {
                if (xhr.status == 200) {



                    loadResponsePost();
                    loadResponsePostclient();


                } else if (this.status == 404) {



                }



            }
        }

        }

        function SetuserActivity($cred_id,$a_staus){
         
       $activity=document.getElementById('user_activity');

      

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

        //set user finish;

        function loadResponsePostclient() {

            var xhr = new XMLHttpRequest();
            var params = "n=" + my_name;
            xhr.open('POST', '../php/clientdata.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    document.getElementById('client').innerHTML = this.responseText;
                } else if (this.status == 404) {

                }
            };
        }



        function Declineuser($id, $usertype, $remove) {


        if( confirm("Are You sure?") ){
            var xhr = new XMLHttpRequest();
            var params = "id=" + $id + '&u_type=' + $usertype + '&remove=' + $remove;
            xhr.open('POST', '../php/approval.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            xhr.onload = function() {
                if (xhr.status == 200) {



                    loadResponsePost();
                    loadResponsePostclient();


                } else if (this.status == 404) {



                }



            }

        }

        window.onload=function(){
  
    
 
  loadResponsePost();
  loadResponsePostclient();

 
 };


        }






        function loadResponse_current_user(){
   
   var xhr = new XMLHttpRequest();
  
   xhr.open('POST','../php/current_user.php', true);
   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   xhr.send();
   xhr.onload = function(){
       if(xhr.status == 200){
       document.getElementById('current_user').innerHTML=this.responseText;                     //
       }else if(this.status == 404){
      
     }
   };
 }






       
    </script>

<script src="../js/awork.js"></script>

    <!-- Js end-->

</body>

</html>